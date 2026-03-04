import { b as createAstro, c as createComponent, m as maybeRenderHead, r as renderComponent, d as addAttribute, a as renderTemplate } from '../chunks/astro/server_B8TvkcDz.mjs';
import 'kleur/colors';
import { a as $$Image, $ as $$Layout } from '../chunks/Layout_FCQTlo12.mjs';
import '@astrojs/internal-helpers/path';
import '@astrojs/internal-helpers/remote';
/* empty css                                    */
import { $ as $$SubFv } from '../chunks/sub-fv_BI5OrUUL.mjs';
import { $ as $$ButtonWhite } from '../chunks/Button-white_CnvqfaAU.mjs';
export { renderers } from '../renderers.mjs';

const Sample = new Proxy({"src":"/trust/_astro/sample.BMHFVokl.jpg","width":590,"height":324,"format":"jpg"}, {
						get(target, name, receiver) {
							if (name === 'clone') {
								return structuredClone(target);
							}
							if (name === 'fsPath') {
								return "/Users/mizukawahiroshikana/Desktop/trust/hp/src/assets/images/sample.jpg";
							}
							if (target[name] !== undefined && globalThis.astroAsset) globalThis.astroAsset?.referencedImages.add("/Users/mizukawahiroshikana/Desktop/trust/hp/src/assets/images/sample.jpg");
							return target[name];
						}
					});

const $$Astro = createAstro("https://hiro-fox.site/");
const $$CardDown = createComponent(($$result, $$props, $$slots) => {
  const Astro2 = $$result.createAstro($$Astro, $$props, $$slots);
  Astro2.self = $$CardDown;
  const { title, alt, link, label } = Astro2.props;
  const baseUrl = "/trust/";
  const href = link?.startsWith("/") ? `${baseUrl}${link.slice(1)}` : link || baseUrl;
  return renderTemplate`${maybeRenderHead()}<div class="card" data-astro-cid-hkv25lhk> <figure class="card__img" data-astro-cid-hkv25lhk> ${renderComponent($$result, "Image", $$Image, { "src": Sample, "alt": alt, "data-astro-cid-hkv25lhk": true })} </figure> <h3 class="card__title" data-astro-cid-hkv25lhk>${title}</h3> <a class="btn"${addAttribute(href, "href")} data-astro-cid-hkv25lhk> ${label} </a> </div> `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/components/CardDown.astro", void 0);

const $$Download = createComponent(($$result, $$props, $$slots) => {
  return renderTemplate`${renderComponent($$result, "Layout", $$Layout, { "title": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u5B8C\u4E86 | Nexus Strategy", "description": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u3042\u308A\u304C\u3068\u3046\u3054\u3056\u3044\u307E\u3059", "data-astro-cid-rzcj5pwa": true }, { "default": ($$result2) => renderTemplate` ${renderComponent($$result2, "SubFv", $$SubFv, { "title": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9", "titleEn": "Materials Download", "margin": true, "data-astro-cid-rzcj5pwa": true })} ${maybeRenderHead()}<div class="dowmload" data-aos="fade-up" data-aos-duration="3000" data-astro-cid-rzcj5pwa> <div class="dowmload__inner" data-astro-cid-rzcj5pwa> <div class="dowmload-cards" data-astro-cid-rzcj5pwa> ${renderComponent($$result2, "CardDown", $$CardDown, { "title": "\u3053\u3053\u306B\u8CC7\u6599\u30BF\u30A4\u30C8\u30EB\u304C\u5165\u308A\u307E\u3059\u3002", "alt": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9", "link": "/", "label": "\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u3059\u308B", "data-astro-cid-rzcj5pwa": true })} ${renderComponent($$result2, "CardDown", $$CardDown, { "title": "\u3053\u3053\u306B\u8CC7\u6599\u30BF\u30A4\u30C8\u30EB\u304C\u5165\u308A\u307E\u3059\u3002", "alt": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9", "link": "/", "label": "\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u3059\u308B", "data-astro-cid-rzcj5pwa": true })} ${renderComponent($$result2, "CardDown", $$CardDown, { "title": "\u3053\u3053\u306B\u8CC7\u6599\u30BF\u30A4\u30C8\u30EB\u304C\u5165\u308A\u307E\u3059\u3002", "alt": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9", "link": "/", "label": "\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u3059\u308B", "data-astro-cid-rzcj5pwa": true })} ${renderComponent($$result2, "CardDown", $$CardDown, { "title": "\u3053\u3053\u306B\u8CC7\u6599\u30BF\u30A4\u30C8\u30EB\u304C\u5165\u308A\u307E\u3059\u3002", "alt": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9", "link": "/", "label": "\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u3059\u308B", "data-astro-cid-rzcj5pwa": true })} ${renderComponent($$result2, "CardDown", $$CardDown, { "title": "\u3053\u3053\u306B\u8CC7\u6599\u30BF\u30A4\u30C8\u30EB\u304C\u5165\u308A\u307E\u3059\u3002", "alt": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9", "link": "/", "label": "\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u3059\u308B", "data-astro-cid-rzcj5pwa": true })} ${renderComponent($$result2, "CardDown", $$CardDown, { "title": "\u3053\u3053\u306B\u8CC7\u6599\u30BF\u30A4\u30C8\u30EB\u304C\u5165\u308A\u307E\u3059\u3002", "alt": "\u8CC7\u6599\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9", "link": "/", "label": "\u30C0\u30A6\u30F3\u30ED\u30FC\u30C9\u3059\u308B", "data-astro-cid-rzcj5pwa": true })} </div> </div> </div> <div class="close body-blue" data-astro-cid-rzcj5pwa> <div class="close__inner" data-astro-cid-rzcj5pwa> <div class="close__cards" data-astro-cid-rzcj5pwa> <div class="close__card" data-astro-cid-rzcj5pwa> <p class="close__card-title" data-astro-cid-rzcj5pwa>お問い合わせ・ご相談</p> <p class="close__card-text" data-astro-cid-rzcj5pwa>経営戦略・組織変革に関することならお気軽にご相談ください。お見積もり依頼も可能です。</p> <div class="close-btn-wrapper" data-astro-cid-rzcj5pwa> ${renderComponent($$result2, "BtnWhite", $$ButtonWhite, { "link": "/form", "label": "\u304A\u554F\u3044\u5408\u308F\u305B\u3059\u308B", "data-astro-cid-rzcj5pwa": true })} </div> </div> </div> </div> </div> ` })} `;
}, "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/download.astro", void 0);

const $$file = "/Users/mizukawahiroshikana/Desktop/trust/hp/src/pages/download.astro";
const $$url = "/trust/download";

const _page = /*#__PURE__*/Object.freeze(/*#__PURE__*/Object.defineProperty({
	__proto__: null,
	default: $$Download,
	file: $$file,
	url: $$url
}, Symbol.toStringTag, { value: 'Module' }));

const page = () => _page;

export { page };
