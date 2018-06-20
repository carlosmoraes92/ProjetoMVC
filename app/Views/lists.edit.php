<form action="/editar" method="POST">
    <div class="marginTop-20 form-row">
        <div class="form-group col-md-6 offset-md-3">
            <div class="form-group col-md-12">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_name" 
                    name="location_name" 
                    value="<?php echo $Lists['location_name']; ?>"
                    maxlength="14" 
                    required="required">
            </div>
            <div class="form-group col-md-12">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_number" 
                    name="location_number" 
                    value="<?php echo $Lists['location_number']; ?>"
                    maxlength="14" 
                    required="required">
            </div>
            <div class="form-group col-md-12 float-right">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_city" 
                    name="location_city" 
                    value="<?php echo $Lists['location_city']; ?>"
                    required="required">
            </div>
            <div class="form-group col-md-12 float-right">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_state"
                    name="location_state" 
                    value="<?php echo $Lists['location_state']; ?>"
                    required="required">
            </div>
            <div class="form-group col-md-12 float-right">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_country"
                    name="location_country" 
                    value="<?php echo $Lists['location_country']; ?>"
                    required="required">
                <input 
                    type="hidden" 
                    id="location_id"
                    name="location_id"
                    value="<?php echo $Lists['location_id'] ?>">
            </div>
            <div align="center" class="form-group offset-md-3 col-md-6">
                <button type="submit" class="btn btn-primary" Value="Cadastrar">Cadastrar</button>
            </div>
        </div>
    </div>
</form>