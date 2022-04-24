/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
  var editor = CKEDITOR.replace('editor1');
  CKFinder.setupCKEditor(editor);
  config.height = 700;
  config.language = 'tr';
  config.uiColor = '#AADC6E';
  config.extraPlugins = 'bootstrapVisibility';
};
