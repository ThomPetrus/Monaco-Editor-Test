var editor;

$(function () {

	initEditor();
	initButton();
	initHover();

});

function initEditor() {

	require.config({
		paths: {
			'vs': '../assets/node_modules/monaco-editor/min/vs'
		}
	});

	require(['vs/editor/editor.main'], function () {
		editor = monaco.editor.create(document.getElementById('editor-container'), {
			value: [
				'function x() {',
				'\tconsole.log("Hello world!");',
				'}'
			].join('\n'),
			language: 'javascript'
		});
	});

}

function initButton() {

	// log the content of the editor to console - proof of concept at least.
	$('#submit-btn').on('click', function () {
		if (editor != null) {
			console.log(editor.getModel().getLinesContent());
		}
	});

}

function initHover(){

}