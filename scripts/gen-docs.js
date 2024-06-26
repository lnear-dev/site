import fs from 'fs';
import path from 'path';
import markdownit from 'markdown-it';
import anchor from 'markdown-it-anchor';
import toc from 'markdown-it-toc-done-right';
import Shiki from '@shikijs/markdown-it';
import { marked } from 'marked';
import marcoPatterns from '../packages/marco/php/data/patterns/expect.json' assert { type: 'json' };
import marcoColors from '../packages/marco/php/data/colors/expect.json' assert { type: 'json' };
import { kSortedPackageNames, kPackagesDir, Dirs } from './bootstrap.js';
import { replace } from '@lnear/marco';
const packagesRaw = kSortedPackageNames
  .map((pack) => ({
    name: pack,
    filename: path.join(kPackagesDir, pack, 'README.md'),
  }))
  .filter((pack) => fs.existsSync(pack.filename));
console.log(packagesRaw);
const md = markdownit({
  html: true,
  linkify: true,
  typographer: true,
  breaks: true,
})
  .use(anchor, {
    level: 2,
    slugify: (s) =>
      encodeURIComponent(
        String(s)
          .trim()
          .toLowerCase()
          .replace(/\s+/g, '-')
          .replace(/[^a-z0-9-]/g, '')
      ),
  })
  .use(toc, {
    level: 2,
  })
  .use(
    await Shiki({
      themes: {
        light: 'vitesse-light',
        dark: 'vitesse-black',
      },
    })
  );
const stub = (content) => `@extends('layouts.docs')
@section('content')
  ${content}
@endsection
`;
const packages = packagesRaw.map((pack) => {
  return {
    name: pack.name,
    filename: pack.filename,
    content: fs.readFileSync(pack.filename, 'utf-8'),
  };
});
const hooks = {
  marco: () => {
    const out_ = fs
      .readFileSync(path.join(kPackagesDir, 'marco', 'README.stub.md'), 'utf-8')
      .replace(
        '{!!patterns!!}',
        Object.keys(marcoPatterns)
          .map(
            (key) => `#### \`${key}\`\n\`\`\`css\n${marcoPatterns[key]}\n\`\`\``
          )
          .join('\n')
      );
    const md = out_
      .replace(
        '{!!colors!!}',
        Object.keys(marcoColors)
          .map(
            (key) => `#### \`${key}\`\n\`\`\`css\n${marcoColors[key]}\n\`\`\``
          )
          .join('\n')
      )
      .replace('[[toc]]', '');
    const out = out_.replace(
      '{!!colors!!}',
      Object.keys(marcoColors)
        .map(
          // (key) =>
          //   `<h4>${key}</h4><h4 style="background-color: ${marcoColors[key]};">${key}</h4>`
          (key) =>
            `<div style="display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem; margin-bottom: 0.5rem;">
                <h4>${key}</h4>
                  <div style="${replace(
                    `bg-${key}`
                  )}; width: 100px; height: 50px;"></div>
                  </div>`
        )
        .join('\n')
    );
    //write README.md
    fs.writeFileSync(path.join(kPackagesDir, 'marco', 'README.md'), md);
    return out;
  },
};
const final = packages.map((pack) => {
  const hook = hooks[pack.name];
  return {
    filename: Dirs.docs(`${pack.name}.blade.php`),
    content: hook ? stub(md.render(hook())) : stub(md.render(pack.content)),
  };
});
console.log(final.map((pack) => pack.filename));
final.forEach((pack) => {
  fs.writeFileSync(pack.filename, pack.content);
});

