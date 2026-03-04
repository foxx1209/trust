import { b as createAstro, c as createComponent, r as renderComponent, a as renderTemplate, m as maybeRenderHead, d as addAttribute } from '../../../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { $ as $$Layout } from '../../../chunks/Layout_FCQTlo12.mjs';
import { $ as $$SubFv } from '../../../chunks/sub-fv_BI5OrUUL.mjs';
import { $ as $$CardCl } from '../../../chunks/CardCl_D1lYoeX2.mjs';
import { $ as $$Close } from '../../../chunks/Close_C62_uknf.mjs';
import { g as getCollection } from '../../../chunks/_astro_content_r1xANtsu.mjs';
/* empty css                                        */
export { renderers } from '../../../renderers.mjs';

const $$Astro = createAstro("https://hiro-fox.site/");
async function getStaticPaths() {
  const allBlogs = await getCollection("blogs");
  const pageSize = 6;
  const totalPages = Math.ceil(allBlogs.length / pageSize);
  return Array.from({ length: totalPages - 1 }, (_, i) => {
    const pageNum = i + 2;
    const start = (pageNum - 1) * pageSize;
    const end = start + pageSize;
    return {
      params: { page: String(pageNum) },
      props: {
        blogs: allBlogs.slice(start, end),
        currentPage: pageNum,
        totalPages
      }
    };
  });
}
const $$page = createComponent(async ($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$page;
  const { blogs, currentPage, totalPages } = Astro2.props;
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": `コラム一覧 ページ${currentPage} | Nexus Strategy`, "description": "経営戦略とビジネス変革に関する最新情報", "data-astro-cid-qnss4z3a": true }, { "default": async ($$result2) => renderTemplate` ${renderComponent($$result2, "SubFv", $$SubFv, { "title": "コラム一覧", "titleEn": "Column", "sp": true, "data-astro-cid-qnss4z3a": true })} ${maybeRenderHead()}<div class="column" data-aos="fade-up" data-aos-duration="3000" data-astro-cid-qnss4z3a> <div class="column__inner" data-astro-cid-qnss4z3a> <ul class="column__list" data-astro-cid-qnss4z3a> <li class="column__item is-active" data-astro-cid-qnss4z3a> <button class="column__item-text" data-astro-cid-qnss4z3a>経営戦略</button> </li> <li class="column__item" data-astro-cid-qnss4z3a> <button class="column__item-text" data-astro-cid-qnss4z3a>AI実務活用Tips</button> </li> <li class="column__item" data-astro-cid-qnss4z3a> <button class="column__item-text" data-astro-cid-qnss4z3a>ABM</button> </li> </ul> <!-- カード表示 --> ${renderComponent($$result2, "CardCl", $$CardCl, { "items": blogs, "baseUrl": "column", "data-astro-cid-qnss4z3a": true })} <!-- ページネーション --> <div class="column__paganation" data-astro-cid-qnss4z3a>  <a${addAttribute(`${"/trust/"}column`, "href")} class="column__paganation-link" data-astro-cid-qnss4z3a> <span class="column__paganation-number" data-astro-cid-qnss4z3a>1</span> </a> ${Array.from({ length: totalPages - 1 }, (_, i) => i + 2).map((pageNum) => renderTemplate`<a${addAttribute(`${"/trust/"}column/page/${pageNum}`, "href")}${addAttribute(`column__paganation-link ${currentPage === pageNum ? "is-active" : ""}`, "class")} data-astro-cid-qnss4z3a> <span class="column__paganation-number" data-astro-cid-qnss4z3a>${pageNum}</span> </a>`)} </div> </div> </div> ${renderComponent($$result2, "Close", $$Close, { "data-astro-cid-qnss4z3a": true })} ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/page/[page].astro", void 0);
const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/column/page/[page].astro";
const $$url = "/trust/column/page/[page]";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
  __proto__: null,
  default: $$page,
  file: $$file,
  getStaticPaths,
  url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
