<form action="/cadastrar" method="POST">
    <div class="marginTop-20 form-row">
        <div class="form-group col-md-6 offset-md-3">
            <div class="form-group col-md-12">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_name" 
                    name="location_name" 
                    placeholder="Nome do local ou proprietário do telefone"
                    maxlength="14" 
                    required="required">
            </div>
            <div class="form-group col-md-12">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_number" 
                    name="location_number" 
                    placeholder="Telefone do local Ex: (99)99999-9999"
                    maxlength="14" 
                    required="required">
            </div>
            <div class="form-group col-md-12 float-right">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_city" 
                    name="location_city" 
                    placeholder="Nome da cidade Ex: Sorocaba"
                    required="required">
            </div>
            <div class="form-group col-md-12 float-right">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_state"
                    name="location_state" 
                    placeholder="Estado onde a cidade se encontra Ex: São Paulo"
                    required="required">
            </div>
            <div class="form-group col-md-12 float-right">
                <input 
                    type="text" 
                    class="form-control" 
                    id="location_country"
                    name="location_country" 
                    placeholder="País onde se encontra Ex: Brasil"
                    required="required">
            </div>
            <div align="center" class="form-group offset-md-3 col-md-6">
                <button type="submit" class="btn btn-primary" Value="Cadastrar">Cadastrar</button>
            </div>
        </div>
    </div>
</form>