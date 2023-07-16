let propsTags = document.querySelectorAll('script[data-props]');

for (let i = 0; i < propsTags.length; i++) {
	Object.assign(window, JSON.parse(propsTags[i].dataset['props']));
}