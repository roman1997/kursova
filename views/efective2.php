<div class="col-xs-12 col-sm-8 col-md-9">

    <div id="menu1" class="tab-pane fade in active" ng-controller="efective2">
        <div class="row">
            <div class="col-sm-6">
                <h3></h3>
                <div id="calc2">
                    <div class="form-group">
                        <label for="t">Термін (у місяцях])</label>
                        <input type="text" id="t" class="form-control" ng-model="m12">
                    </div>
                    <div class="form-group">
                        <label for="invest">Номінальна ставка </label>
                        <input type="text" id="invest" class="form-control" ng-model="m2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="invest">Процентна ставка</label>
                    <input type="text" id="invest" class="form-control" ng-model="j2*100">
                </div>
            </div>
              <div class="col-sm-6">
        <h3>Річна ефективна ставка</h3>
        <p>{{j1()*100 | number:1}} %</p>
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
