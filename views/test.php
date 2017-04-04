<script language="javascript" type="text/javascript">
    function СompCnt($scope) {
        //опции формы
        var options = {
            "1": {
                minsumm: 1000
            },

            "2": {
                minsumm: 2000
            },

            "3": {
                minsumm: 3000
            }
        };
        //установим начальную сумму и валюту
        $scope.summ = 0;
        $scope.valut = 1;

        //будем слкшать переключение валюты
        $scope.$watch('valut', function() {
            $scope.cOpt = options[$scope.valut]

            //если сумма меньше минимума то выставим сумму на допустимый минимум
            if ($scope.summ < $scope.cOpt.minsumm) {
                $scope.summ = $scope.cOpt.minsumm;
            }

        })

    }

</script>

<div ng-controller="СompCnt">

    Введите сумму: <input type="number" min="{{cOpt.minsumm}}" ng-model="summ">
    <select ng-model="valut" name="valut" required>
        	<option value="3" >BYR</option>
       		<option value="2" >RUB</option>
       		<option value="1" >USD</option>     
      </select>

</div>

