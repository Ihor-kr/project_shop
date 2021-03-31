let lastResFind = "";
let copy_page = "";

function TrimStr(s) {
    s = s.replace(/^\s+/g, '');
    return s.replace(/\s+$/g, '');
}

function FindOnPage(inputId) {
    let obj = window.document.getElementById(inputId);
    let textToFind;

    if (obj) {
        textToFind = TrimStr(obj.value);
    } else {
        alert("Введене слово не знайдено");
        return;
    }

    if (textToFind == "") {
        alert("Введіть слово!");
        return;
    }

    if (textToFind.length < 2) {
        alert("Введіть слово для пошуку!");
        return;
    }

    if (copy_page.length > 0)
        document.body.innerHTML = copy_page;
    else copy_page = document.body.innerHTML;

    document.body.innerHTML = document.body.innerHTML.replace(eval("/name=" + lastResFind + "/gi"), " ");
    document.body.innerHTML = document.body.innerHTML.replace(eval("/" + textToFind + "/gi"), "<a name=" + textToFind + " style='background:yellow; font-size:15px'>" + textToFind + "</a>");
    lastResFind = textToFind;
    window.location = '#' + textToFind;
}