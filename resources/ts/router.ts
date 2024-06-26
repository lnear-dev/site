if (!(globalThis as any).URLPattern) await import('urlpattern-polyfill');
import { Router, LazyPlugin, resolveRouterPath } from '@lnear/router';
import { html } from '@lnear/blitz';
import './pages/landing';

export const router = new Router({
  routes: [
    {
      path: resolveRouterPath(),
      title: 'lnear.dev',
      render: () => html`<app-landing></app-landing>`,
    },
    {
      path: resolveRouterPath('contact'),
      title: 'contact',
      plugins: [new LazyPlugin(() => import('./pages/contact.js'))],
      render: () => html`<app-contact></app-contact>`,
    },
    {
      path: resolveRouterPath('blog'),
      title: 'blog',
      plugins: [new LazyPlugin(() => import('./templates/blog-post.js'))],
      render: () => html`<app-blog-post></app-blog-post>`,
    },
  ],
});
