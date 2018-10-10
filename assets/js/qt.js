QTags.addButton('qtsd-button-one','U','<u>','</u>');
QTags.addButton('qtsd-button-two','JS',qtsd_button_two);
QTags.addButton('qtsd-button-three','FA',qtsd_fap_preveiw);

function qtsd_button_two(){
    var name = prompt('What is your name?');
    var text= "Hello "+name;
    QTags.insertContent(text);
}

function qtsd_fap_preveiw(){
    tb_show("Fontawesome",qtsd.preview);
}

function insertFA(icon){
    tb_remove();
    QTags.insertContent('<i class="fa '+icon+'"></i>');
}