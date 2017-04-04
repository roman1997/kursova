<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="query">
        <div class="row">
            <div class="col-sm-6">
                <h3>Кредитний калькулятор</h3>
                <div id="calc3">
                    <div class="form-group">
                        <label for="Q_request">
                                    Розмір позики(Q)
                                </label>
                        <input type="text" id="Q_request" class="form-control" ng-model="Q">
                    </div>
                    <div class="form-group">
                        <label for="time_current">
                                    Момент часу (T<sub>0</sub>)
                                </label>
                        <input type="date" class="form-control" ng-model="T0">

                    </div>
                    <div class="form-group">
                        <label for="payment">
                                    Кількість платежів
                                </label>
                        <input type="number" min="1" id="payment" class="form-control" ng-model="m">
                    </div>

                    <div class="form-group">
                        <label for="payment">
                                    Кредитна ставка (r)
                                </label>

                        <select class="form-control" id="type" name="type" ng-model="model.obj" data-ng-options="obj.name for obj in objs track by obj.id">
                        
                        </select>
                        <input type="number" id="percent" class="form-control" ng-model="r">
 
                    </div>
                   

<!--
                    <p id="result4">{{T[2]}}</p>
                    <h3>Чистий дохід банка - <span id="profit_b"></span></h3>
-->
                </div>
            </div>
            <div class="col-sm-12">
                <div class="table-responsive">

                    <table class="tg table table-bordered">
                        <tr>
                            <th class="tg-yw4l" rowspan="2">Показник</th>
                            <th class="tg-yw4l" rowspan="2">Позика</th>
                            <th class="tg-yw4l" colspan="{{m}}">Сплати</th>
                        </tr>
                        <tr>
                            <td class="tg-yw4l" ng-repeat="i in getNumber(m) track by $index">{{$index+1}}</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Дата</td>
                            <td class="tg-yw4l">{{T0 | date : "dd.MM.y"}}</td>
                            <td class="tg-yw4l" ng-repeat="m in periods() track by $index">{{m | date : "dd.MM.y"}}
                                <input type="number" min="1" ng-model="T[$index+1]">

                            </td>

                        </tr>
                        <tr>
                            <td>
                                Сума платежу
                            </td>
                            <td></td>
                            <td ng-repeat="i in getNumber(m) track by $index"><input type="number" ng-model="V[$index+1]" min="1" value="100"></td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Розмір тис грн</td>
                            <td class="tg-yw4l" id="Q_request_price">{{Q}}</td>
                            <td class="tg-yw4l" ng-repeat="S in result() | limitTo:-m track by $index">{{S | currency : '₴' : 2 }}</td>

                        </tr>
                    </table>

                </div>
            </div>
        </div>

    </div>

</div>
<!--end col-sm-9-->

<!--end col-sm-3-->
</div>
<!--end row-->

</div>
<!--end container-->
