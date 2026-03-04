const dummy = new Proxy({"src":"/trust/_astro/dummy.DpQ27Jc7.png","width":1860,"height":760,"format":"png"}, {
						get(target, name, receiver) {
							if (name === 'clone') {
								return structuredClone(target);
							}
							if (name === 'fsPath') {
								return "/Users/mizukawahiroshikana/Desktop/trust/hp/src/assets/images/dummy.png";
							}
							if (target[name] !== undefined && globalThis.astroAsset) globalThis.astroAsset?.referencedImages.add("/Users/mizukawahiroshikana/Desktop/trust/hp/src/assets/images/dummy.png");
							return target[name];
						}
					});

export { dummy as d };
