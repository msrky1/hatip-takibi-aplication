
console.clear();

gsap.registerPlugin(MorphSVGPlugin);

const morphs = gsap.utils.toArray("#morphs path");

gsap.to("#original path", {
	duration: 1,
	ease: "elastic.inOut(1.2, 0.75)",
	stagger: {
		each: 0.05,
		from: ['center', 'start'][Math.floor(Math.random() * 2)],
		repeat: -1,
		yoyo: true,
		repeatDelay: 0.5
	},
	morphSVG: (i) => morphs[i]
});

gsap.to("#filter feDisplacementMap", {
	duration: 1,
	ease: "elastic.inOut(1, 0.75)",
	attr: {
		scale: 10
	},
	repeat: -1,
	yoyo: true,
	repeatDelay: 0.5
});
