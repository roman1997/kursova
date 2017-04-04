//window.calc = function () {
//    var a = parseFloat(document.getElementById("summKredit").value.replace(",", "."));
//    var b = parseFloat(document.getElementById("interest").value.replace(",", "."));
//    var с = parseFloat(document.getElementById("termin").value.replace(",", "."));
//
//    var SquareFloor = a * b * с;
//    if (SquareFloor) {
//        document.getElementById("result").innerHTML = SquareFloor;
//    }
//}
//window.easyInterest = function () {
//    var p = parseFloat(document.getElementById("currentPrice").value.replace(",", "."));
//    var r = parseFloat(document.getElementById("rateInterest").value.replace(",", "."));
//    var n = parseFloat(document.getElementById("srok").value.replace(",", "."));
//    r = r / 100;
//    var result2 = p * (1 + r * n); //на роки
//    //var result2 = p*(1+r*(n/12));//місяці
//    //var result2 = p*(1+r*(n/360));//дні
//    if (result2) {
//        document.getElementById("result2").innerHTML = "Майбутня вартість - " + result2.toFixed(2) + " грн.";
//    }
//     var new_p1 = p + OneYear(p, r);
//        for (var i = 1; i < n + 1; i++) {  document.getElementById("yearTable1").innerHTML += "<tr><td>" + i + "</td>" + "<td>" + p + "</td>" + "<td>" + r + "</td>" + "<td>" + new_p1 + "</td><tr>";
//        new_p1 += OneYear(p, r);
//    }
//    
//}
//window.hardInterest = function () {
//    var p = parseFloat(document.getElementById("currentPrice2").value.replace(",", "."));
//    var r = parseFloat(document.getElementById("rateInterest2").value.replace(",", "."));
//    var n = parseFloat(document.getElementById("srok2").value.replace(",", "."));
//    //for (var j = 0; j < n; j++) {
//
//    //}
//    r = r / 100;
//    var resultH = p*(1+r)*n;
//    //resultH*=n; //на роки
//    //if (resultH) {
//      document.getElementById("result3").innerHTML = "Майбутня вартість - " + resultH + " грн.";
//    //}
////    var new_p = p + OneYear(p, r);
////    for (var i = 1; i < n + 1; i++) {
////        document.getElementById("yearTable").innerHTML += "<tr><td>" + i + "</td>" + "<td>" + p + "</td>" + "<td>" + r + "</td>" + "<td>" + new_p + "</td><tr>";
////        new_p += OneYear(p, r);
////    }
//
//
//}
//
//function OneYear(sum, percent) {
//    return sum * percent;
//}
//window.request_f = function () {
//    var Q = parseFloat(document.getElementById("Q_request").value.replace(",", "."));
//    var V = parseFloat(document.getElementById("payment").value.replace(",", "."));
//    var T = parseFloat(document.getElementById("time_current").value.replace(",", "."));
//    var m = parseFloat(document.getElementById("time_current_m").value.replace(",", "."));
//    var r = parseFloat(document.getElementById("percent").value.replace(",", "."));
//    //for (var j = 0; j < n; j++) {
//
//    document.getElementById("Q_request_price").innerHTML = Q;
//    //}
//    var k, D; //на роки
//    //var profit_b=11;
//    //D = -Q + V / (1 + r);
//    for (k = 1; k < 3; k++) {
//        D +=V[k]/(1 + r[k]);
//    }
//    D=-Q+D;
//  document.getElementById("profit_b").innerHTML = D;
//    //D = -Q + D;
//    // var result4 = D.toFixed(1);
//    if (result4) {
//        document.getElementById("result4").innerHTML = "Майбутня вартість - " + result4 + " грн.";
//    }
//    for (var i = 1; i < T; i++) {
//        document.getElementById("yearTable2").innerHTML += "<tr><td>" + i + "</td>" + "<td>" + T + "</td>" + "<td>" + r + "</td>" + "<td>" + D + "</td><tr>";
//
//    }
//
//
//}

