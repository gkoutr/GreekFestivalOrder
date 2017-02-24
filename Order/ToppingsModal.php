<script language="JavaScript" src="ChangeModaltext.js"></script>

<form method="POST" name="ToppingsModal" id="ToppingsModalForm" role="form">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="body_bread">
                        <h3>Pita Bread</h3>
                        <input type="radio" name="bread" value="pita">Pita Bread<p></p>
                        <input type="radio" name="bread" value="nopita">No Pita<p></p>
                        <input type="radio" name="bread" value="pitaside">Pita on the Side<p></p>
                    </div>
                    <div class="body_toppings">
                        <h3>Toppings</h3>
                        <input type="checkbox" name="lettuce" value="lettuce">Lettuce<p></p>
                        <input type="checkbox" name="tomato" value="tomato">Tomato<p></p>
                        <input type="checkbox" name="onion" value="onion">Onion<p></p>
                        <input type="checkbox" name="feta" value="feta">Feta cheese<p></p>
                        <input type="checkbox" name="cucumber" value="cucumber">Cucumber<p></p>
                        <input type="checkbox" name="tzatziki" value="tzatziki">Tzatziki<p></p>
                    </div>
                    <div class="body_special">
                        <p>Enter any special instructions here.</p>
                        <input type="textbox" name="special">
                        <p>Quantity:</p>
                        <input type="textbox" name="qty">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>


