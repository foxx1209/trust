import { b as createAstro, c as createComponent, r as renderComponent, a as renderTemplate, m as maybeRenderHead, d as addAttribute } from '../../../../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { $ as $$Layout } from '../../../../chunks/Layout_FCQTlo12.mjs';
import { $ as $$SubFv } from '../../../../chunks/sub-fv_BI5OrUUL.mjs';
import { $ as $$CardCl } from '../../../../chunks/CardCl_D1lYoeX2.mjs';
import { $ as $$Close } from '../../../../chunks/Close_C62_uknf.mjs';
import { C as CATEGORIES, $ as $$CategoryTabs } from '../../../../chunks/CategoryTabs_DQU31V7v.mjs';
import { g as getCollection } from '../../../../chunks/_astro_content_r1xANtsu.mjs';
/* empty css                                           */
export { renderers } from '../../../../renderers.mjs';

const $$Astro = createAstro("https://hiro-fox.site/");
async function getStaticPaths() {
  const pageSize = 6;
  const allBlogs = await getCollection("blogs");
  const paths = [];
  for (const categoryKey of Object.keys(CATEGORIES)) {
    const filtered = allBlogs.filter(
      (blog) => blog.data.category?.includes(categoryKey)
    );
    const totalPages = Math.ceil(filtered.length / pageSize);
    for (let page = 2; page <= totalPages; page++) {
      const start = (page - 1) * pageSize;
      const end = start + pageSize;
      paths.push({
        params: {
          category: categoryKey,
          page: String(page)
        },
        props: {
          blogs: filtered.slice(start, end),
          totalPages,
          currentPage: page,
          categoryKey
        }
      });
    }
  }
  return paths;
}
const $$page = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$page;
  const { blogs, totalPages, currentPage, categoryKey } = Astro2.props;
  const category = CATEGORIES[categoryKey];
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": `${category.name}の記事一覧 ${currentPage}ページ目 | Nexus Strategy`, "description": category.description, "data-astro-cid-z7m3rssb": true }, { "default": async ($$result2) => renderTemplate` ${renderComponent($$result2, "SubFv", $$SubFv, { "title": category.name, "titleEn": "Column", "sp": true, "data-astro-cid-z7m3rssb": true })} ${maybeRenderHead()}<div class="column" data-aos="fade-up" data-aos-duration="3000" data-astro-cid-z7m3rssb> <div class="column__inner" data-astro-cid-z7m3rssb> ${renderComponent($$result2, "CategoryTabs", $$CategoryTabs, { "currentCategory": categoryKey, "data-astro-cid-z7m3rssb": true })} ${renderComponent($$result2, "CardCl", $$CardCl, { "items": blogs, "baseUrl": "column", "data-astro-cid-z7m3rssb": true })} ${totalPages > 1 && renderTemplate`<div class="column__paganation" data-astro-cid-z7m3rssb> ${Array.from({ length: totalPages }, (_, i) => i + 1).map((page) => renderTemplate`<a${addAttribute(
    page === 1 ? `${"/trust/"}column/${category.slug}/` : `${"/trust/"}column/${category.slug}/page/${page}/`,
    "href"
  )}${addAttribute(page === currentPage ? "column__paganation-link is-active" : "column__paganation-link", "class")} data-astro-cid-z7m3rssb> <span class="column__paganation-number" data-astro-cid-z7m3rssb>${page}</span> </a>`)} </div>`} </div> </div> ${renderComponent($$result2, "Close", $$Close, { "data-astro-cid-z7m3rssb": true })} ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/[category]/page/[page].astro", void 0);
const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/[category]/page/[page].astro";
const $$url = "/trust/column/[category]/page/[page]";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
  __proto__: null,
  default: $$page,
  file: $$file,
  getStaticPaths,
  url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
