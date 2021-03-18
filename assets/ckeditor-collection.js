let CKEditor= CKEDITOR;
CKEditor.insertText=(element,content)=>{
     CKEDITOR.instances[element].insertHtml(content);
};
CKEditor.get=(element)=>{
    return CKEDITOR.instances[element];
}
