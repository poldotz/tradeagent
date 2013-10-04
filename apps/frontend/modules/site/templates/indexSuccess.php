<!-- Example row of columns -->
<div class="row-fluid ">
    <br/>
    <div class="span12">
        <h2>dati della stanza</h2>
        <div class="well">
            <table class="table">
                <thead>
                <tr>
                    <th>Check in: <input type="text" id="dpd1" value="" class="span2"></th>
                    <th>Check out: <input type="text" id="dpd2" value="" class="span2"></th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

</div>

<hr>

<div class="footer">
    <p>&copy; Company 2013</p>
</div>
<script>
    $(document).ready(function() {

        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
        var disabled_date = new Date(nowTemp.getFullYear(),nowTemp.getMonth(),nowTemp.getDate()+3,0,0,0);

        var checkin = $('#dpd1').datepicker({
            onRender: function(date) {
                if(date.valueOf() == disabled_date.valueOf()){
                 return 'disabled';
                }
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#dpd2')[0].focus();
            }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
                checkout.hide();
            }).data('datepicker');
    });

</script>