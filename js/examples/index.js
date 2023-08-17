import AField from './components/a-field';

// globals
window.aFields = [];

// init
document.querySelectorAll('.a-field').forEach((element) => {
	window.aFields.push(new AField(element));
});
