import { b as createAstro, c as createComponent, m as maybeRenderHead, d as addAttribute, u as unescapeHTML, a as renderTemplate } from './astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import 'clsx';
/* empty css                      */

const $$Astro = createAstro("https://hiro-fox.site/");
const $$SubFv = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$SubFv;
  const { title, titleEn } = Astro2.props;
  const {
    sp = false,
    pc = false,
    margin = false
  } = Astro2.props;
  return renderTemplate`${maybeRenderHead()}<div${addAttribute(["fv", [
    { "margin-none": margin }
  ]], "class:list")} data-astro-cid-fprri6ul> <div class="fv__inner" data-astro-cid-fprri6ul> <hgroup class="fv__title-wrapper" data-astro-cid-fprri6ul> <p class="fv__titleEn" data-astro-cid-fprri6ul>${titleEn}</p> <h1${addAttribute([
    "fv__title",
    {
      "sp-only": sp,
      "pc-only": pc
    }
  ], "class:list")} data-astro-cid-fprri6ul>${unescapeHTML(title)}</h1> </hgroup> </div> </div> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/sub-fv.astro", void 0);

export { $$SubFv as $ };
