import { b as createAstro, c as createComponent, m as maybeRenderHead, d as addAttribute, u as unescapeHTML, r as renderComponent, a as renderTemplate } from './astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import '@astrojs/internal-helpers/path';
import '@astrojs/internal-helpers/remote';
import { a as $$Image } from './Layout_FCQTlo12.mjs';
/* empty css                      */

const $$Astro$1 = createAstro("https://hiro-fox.site/");
const $$SectionHeader = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro$1, $$props, $$slots);
  Astro2.self = $$SectionHeader;
  const { title, img, subTitle, text, alt } = Astro2.props;
  const {
    sp = false
  } = Astro2.props;
  return renderTemplate`${maybeRenderHead()}<div class="section" data-astro-cid-wk2votdk> <h2${addAttribute(["section__title", {
    "section__title--sp": sp
  }], "class:list")} data-astro-cid-wk2votdk>${unescapeHTML(title)}</h2> <div class="section-wrapper" data-astro-cid-wk2votdk> <figure class="section__header-img" data-astro-cid-wk2votdk> ${renderComponent($$result, "Image", $$Image, { "src": img, "alt": alt, "data-astro-cid-wk2votdk": true })} </figure> <div class="section__textarea" data-astro-cid-wk2votdk> <h3 class="section__sub-title" data-astro-cid-wk2votdk>${unescapeHTML(subTitle)}</h3> <p class="section__text" data-astro-cid-wk2votdk>${text}</p> </div> </div> </div> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/SectionHeader.astro", void 0);

const $$Astro = createAstro("https://hiro-fox.site/");
const $$CardContent = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$CardContent;
  const { number, img, title, text, alt } = Astro2.props;
  const {
    first = false,
    second = false,
    blue = false,
    grade = false
  } = Astro2.props;
  return renderTemplate`${maybeRenderHead()}<div${addAttribute(["card-content", {
    "card-content--first": first,
    "card-content--second": second
  }], "class:list")} data-astro-cid-znhrnf27> <div class="card-content-left" data-astro-cid-znhrnf27> <span class="card-content__nunber" data-astro-cid-znhrnf27>${number}</span> <figure class="card-content__img" data-astro-cid-znhrnf27> ${renderComponent($$result, "Image", $$Image, { "src": img, "alt": alt, "data-astro-cid-znhrnf27": true })} </figure> </div> <div class="card-content__textarea" data-astro-cid-znhrnf27> <h3 class="card-content__title" data-astro-cid-znhrnf27>${title}</h3> <p${addAttribute(["card-content__text", {
    "card-content__text--blue": blue,
    "card-content__text--grade": grade
  }], "class:list")} data-astro-cid-znhrnf27>${unescapeHTML(text)}</p> </div> </div> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/CardContent.astro", void 0);

export { $$SectionHeader as $, $$CardContent as a };
