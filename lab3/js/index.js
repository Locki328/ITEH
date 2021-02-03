(function show() {
    var table = document.getElementsByTagName("table")[0];
    var max = +table.rows[1].cells[3].innerHTML;
    var min = +table.rows[1].cells[7].innerHTML;
    var maxindex = 1;
    var minindex = 1;
    for (var i = 2; i < table.rows.length; i++) {
        var nowmax = +table.rows[i].cells[3].innerHTML;
        var nowmin = +table.rows[i].cells[7].innerHTML;
        if (nowmax > max) {
            max = nowmax;
            maxindex = i;
        }
        if (nowmin < min) {
            min = nowmin;
            minindex = i;
        }
    }
    alert("Первая дата: " + table.rows[maxindex].cells[2].innerHTML + " максимальная температура: " + max + " Вторая дата: " + table.rows[minindex].cells[2].innerHTML + " Минимальная температура: " + min);
})();