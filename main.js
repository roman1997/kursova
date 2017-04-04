var app = angular.module('mainApp', []);
app.controller('query', function ($scope) {

        //кредитний калькулятор
        $scope.Q = 100000; //початкова позика
        $scope.T = []; //масив періодів платежів
        $scope.T = [0, 30, 31, 30, 31, 31];
        $scope.V = []; //масив платежів
        $scope.V = [0, 0, 10000, 20000, 30000, 30000]; //масив платежів

        $scope.T0 = new Date(); //дата позики
        $scope.m = 5; //кількість платежів
       // $scope.r = 0.001; //добова ставка
        $scope.objs = [
            {
                id: 0.1,
                name: 'День'
            },
            {
                id: 3.1,
                name: 'Місяць'

            },
            {
                id: 12,
                name: 'Квартал'

            },
            {
                id: 48,
                name: 'Рік'

            }
        ];
        $scope.model = {
            obj: $scope.objs[0]
        };
        $scope.r = $scope.model.obj.id;
        $scope.result = function () {
            // return $scope.Q * Math.pow(1 + $scope.r, 30);
            var S = [];
            S[0] = $scope.Q;
            for (var i = 1; i <= $scope.m; i++) {
                var n = 0;
                for (var j = 1; j <= i; j++) {
                    n += $scope.T[i];
                }
                S[i] = (S[i - 1] - $scope.V[i]) * Math.pow(1 + $scope.r/100, n);
                console.log("S[" + i + "]=" + S[i - 1] + "-" + $scope.V[i] + "*pow(" + (1 + $scope.r/100) + "," + n + ")");
            }
            return S;
        }

        $scope.getNumber = function (num) {
            return new Array(num);
        }
        $scope.periods = function () {
            var mas = [];
            var totalDays = 0;
            for (var i = 1; i <= $scope.m; i++) {
                totalDays += $scope.T[i];
                mas.push(moment($scope.T0).add(totalDays, 'days').format("DD.MM.YYYY"));
            }
            return mas;
        }
        $scope.S = function (P, n) {
            return P * Math.pow(1 + $scope.r/100, n);
        }
        $scope.period = function () {
            return $scope.T0 + 30;
        }




    }

);
app.controller('easyPercent', function ($scope) {
    $scope.P = 15000; //початкова позика
    $scope.i = 1; //річна ставка
    $scope.t = 6; //кількість років
    $scope.T0 = new Date(); //дата позики
    $scope.I = function () {
        return $scope.P * $scope.i / 100 * $scope.t;
    }
    $scope.S = function () {
        return $scope.P + $scope.P * $scope.i * $scope.t;
    }
    $scope.S2 = function () {
        return $scope.P * (1 + $scope.i / 100 * $scope.t);
    }
    $scope.getYear = function (num) {
        return $scope.T0 + 1;
    }
});
app.controller('easyPercent2', function ($scope) {
    $scope.P = 620; //початкова позика
    //$scope.i = 0.01; //річна ставка
    $scope.t = 3; //кількість місяців
    $scope.I = 30;
    $scope.t = $scope.t / 12;

    $scope.i = function () {
        return ($scope.I / ($scope.P * $scope.t)) * 100 + '%';
    }
});
app.controller('easyPercent3', function ($scope) {
    $scope.I = 75.35; //початкова позика
    $scope.i = 8; //річна ставка
    $scope.t = 3; //кількість місяців
    $scope.t = $scope.t / 12;

    $scope.P = function () {
        return $scope.I / ($scope.i / 100 * $scope.t);
    }
});
app.controller('easyPercent4', function ($scope) {
    $scope.S = 1500; //початкова позика
    $scope.i = 8; //річна ставка
    $scope.P = 500; //вклад
    $scope.I = 30;
    $scope.t = function () {
        return (($scope.S - $scope.P) / ($scope.P * $scope.i / 100)) + ' років';
    }


});
app.controller('presentValue1', function ($scope) {
    $scope.S = 500; //початкова позика
    $scope.i = 10; //річна ставка
    $scope.t = 2; //роки
    $scope.P = function () {
        return ($scope.S / (1 + $scope.i / 100 * $scope.t));
    }


});
app.controller('discont1', function ($scope) {
    $scope.P = 1000; //Вексель
    $scope.i = 0.15; //%
    $scope.d = 11; //%
    $scope.Ds = new Date();; //початкова дата
    $scope.De = new Date("2017-12-18"); //кінцева дата
    $scope.Dr = new Date("2017-07-18"); //кінцева дата
    //var numberOfDaysToAdd = 4;
    //$scope.newdate = $scope.De.setDate($scope.De.getDate() + numberOfDaysToAdd);

    $scope.Days = function () {
        return ($scope.De - $scope.Ds) / 1000 / 60 / 60 / 24;
    }

    $scope.t = function () {
        $scope.Days();
        return $scope.Days / 360;
    }

    $scope.S = function () {
        $scope.t();
        return $scope.P * (1 + $scope.i + $scope.t);
    }


});
app.controller('ecvivalent1', function ($scope) {
    $scope.S = 200; //сума
    $scope.i = 10.5; //%
    $scope.t = 2; //роки  
    $scope.P = function () {
        return $scope.S / (1 + $scope.i / 100 * $scope.t);
    }

});
app.controller('ecvivalent2', function ($scope) {
    $scope.i = 2; //%
    $scope.t = 3; //роки  
    $scope.t = $scope.t / 12;
    $scope.d = function () {
        return $scope.i / (1 + $scope.i / 100 * $scope.t) * 100 + '%';
    }

});
app.controller('inflacia', function ($scope) {
    $scope.d1 = new Date("2017-03-14");
    $scope.d2 = new Date("2017-12-28");
    $scope.i = 0.1;
    $scope.r = 0.06;
    $scope.P = 12000;
    $scope.Days = function () {
        return ($scope.d2 - $scope.d1) / 1000 / 60 / 60 / 24;
    }
    $scope.t = $scope.Days() / 360;
    $scope.ir = function () {
        return $scope.i + $scope.r + $scope.i * $scope.r * $scope.t;

    }
    $scope.S = function () {
        return $scope.P * (1 + $scope.t * $scope.ir());
    }

});
app.controller('inflacia2', function ($scope) {
    $scope.d = 0.18;
    $scope.r = 0.1;
    $scope.S = 300;
    $scope.days = 90;
    $scope.t = $scope.days / 360;
    $scope.dr = function () {
        return ($scope.r + $scope.d) / (1 + $scope.r * $scope.t);

    }
    $scope.discontR = function () {
        return $scope.S * $scope.t * $scope.dr();
    }
    $scope.discont = function () {
        return $scope.S * $scope.t * $scope.d;
    }

});
app.controller('consumerCredit1', function ($scope) {
    $scope.P = 800;
    $scope.t = 3;
    $scope.i = 0.28;
    $scope.m = 12;

    $scope.S = function () {
        return $scope.P * (1 + $scope.i * $scope.t);
    }
    $scope.q = function () {
        return $scope.S() / ($scope.m * $scope.t);
    }
});
app.controller('consumerCredit2', function ($scope) {
    $scope.P = 14000;
    $scope.P1 = 4000;
    $scope.i = 0.2;
    $scope.m = 4;

    $scope.q = function () {
        return (($scope.P - $scope.P1) * (1 + $scope.i * $scope.m)) / ($scope.m * $scope.m);
    }
});

//складні відсотки капіталізація
app.controller('kapitalisacia1', function ($scope) {
    $scope.P = 15000;
    $scope.t = 4;
    $scope.i = 6;
    $scope.n = $scope.t;
    $scope.S = function () {
        return $scope.P * Math.pow(1 + $scope.i / 100, $scope.n);
    }
});
app.controller('efective', function ($scope) {
    $scope.j = 12; //номінальна ставка
    $scope.m = 3; //Місяці
    $scope.n = $scope.t;
    $scope.i = function () {
        return Math.pow(1 + $scope.j / 100 / $scope.m, $scope.m) - 1;
    }

});
app.controller('efective2', function ($scope) {
    $scope.m2 = 2;
    $scope.j2 = 12; //номінальна ставка 
    $scope.m12 = 12; //Місяці
    $scope.j2 = $scope.j2 / 100;
    $scope.j1 = function () {
        $scope.k = 1 + $scope.j2 / $scope.m12;
        return (Math.pow($scope.k, $scope.m12 / 2) - 1) * 2;
    }
});
app.controller('vigrash', function ($scope) {
    $scope.P = 50000; // uah
    $scope.i = 6; //% 
    $scope.i = $scope.i / 100; //% 
    $scope.m1 = 12;
    $scope.t = 3;
    $scope.S1 = $scope.P * Math.pow((1 + $scope.i / $scope.m1), $scope.m1 * $scope.t);
    $scope.S2 = $scope.P * Math.exp($scope.t * $scope.i);
    $scope.S = function () {
        return ($scope.S2 - $scope.S1);
    }
});
app.controller('diskontuvannya1', function ($scope) {
    $scope.S = 18000; // uah
    $scope.n = 4; //роки
    $scope.dc = 12; //% 
    $scope.dc = $scope.dc;

    $scope.D = function () {
        $scope.P = $scope.S * Math.pow((1 - $scope.dc / 100), $scope.n);
        return ($scope.S - $scope.P);
    }
});
app.controller('diskontuvannya2', function ($scope) {
    $scope.P = 200000; // uah
    $scope.S = 350000; //
    $scope.dc = 12; //% 
    $scope.n = 3;

    $scope.i = function () {
        return (Math.pow($scope.S / $scope.P, 1 / $scope.n) - 1);

    }
});
app.controller('narsum', function ($scope) {
    $scope.S = 18000; // uah
    $scope.n = 4; //роки
    $scope.dc = 12; //% 
    $scope.dc = $scope.dc / 100;
    $scope.P = $scope.S * Math.pow((1 - $scope.dc), $scope.n);
    $scope.D = $scope.S - $scope.P;
});
