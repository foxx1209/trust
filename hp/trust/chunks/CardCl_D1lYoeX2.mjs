import { b as createAstro, c as createComponent, m as maybeRenderHead, d as addAttribute, a as renderTemplate, r as renderComponent } from './astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import '@astrojs/internal-helpers/path';
import '@astrojs/internal-helpers/remote';
import { a as $$Image } from './Layout_FCQTlo12.mjs';
/* empty css                         */

const Sample = new Proxy({"src":"/trust/_astro/no-image.DwfOE-HW.webp","width":367,"height":280,"format":"webp"}, {
						get(target, name, receiver) {
							if (name === 'clone') {
								return structuredClone(target);
							}
							if (name === 'fsPath') {
								return "/Users/mizukawahiroshikana/Desktop/trust/hp/src/assets/images/no-image.webp";
							}
							if (target[name] !== undefined && globalThis.astroAsset) globalThis.astroAsset?.referencedImages.add("/Users/mizukawahiroshikana/Desktop/trust/hp/src/assets/images/no-image.webp");
							return target[name];
						}
					});

const $$Astro = createAstro("https://hiro-fox.site/");
const $$CardCl = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$CardCl;
  const {
    items,
    baseUrl = ""
    // デフォルトは "column"
  } = Astro2.props;
  return renderTemplate`${maybeRenderHead()}<div class="column__cards" data-astro-cid-xkegz4nv> ${items.map((item) => renderTemplate`<a class="card"${addAttribute(`${"/trust/"}${baseUrl}/${item.id}`, "href")} data-astro-cid-xkegz4nv> <div class="card__img" data-astro-cid-xkegz4nv> ${item.data.img ? renderTemplate`<img width="100" height="100" loading="lazy" decoding="async"${addAttribute(item.data.img?.url, "src")}${addAttribute(item.data.img?.alt || item.data.title, "alt")} data-astro-cid-xkegz4nv>` : renderTemplate`${renderComponent($$result, "Image", $$Image, { "src": Sample, "alt": item.data.title, "data-astro-cid-xkegz4nv": true })}`} </div> <h3 class="card__title" data-astro-cid-xkegz4nv>${item.data.title}</h3> </a>`)} </div> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/CardCl.astro", void 0);

export { $$CardCl as $ };
