<div class="card-header">
    <h4>Edit Temperature</h4>
    <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                      Preset Configuration
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Oyster Mushroom</a>
                      <a class="dropdown-item" href="#">Button Mushroom</a>
                      <a class="dropdown-item" href="#">Magic Mushroom</a>
                      <a class="dropdown-item" href="#"><span class="fa fa-plus"></span>Add New</a>
                    </div>
                  </div>
</div>
<div class="card-body">
    <form id="temperatureSettingForm" class="needs-validation">
    @csrf
        <input type="hidden" name="id" id="id" value="1">
        <div class="row">
            <div class="form-group col-12">
            <label>Sensor Name</label>
            <input type="text" class="form-control" name="sensor_name" id="sensor_name" value="Temperature Sensor" required disabled>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-7 col-12">
            <label>Minimum Value</label>
            <input type="number" class="form-control" name="sensor_limit_value" id="sensor_limit_value" required>
            </div>
            <div class="form-group col-md-5 col-12">
            <label>Max Value</label>
            <input type="number" name="sensor_max_value" id="sensor_max_value" required class="form-control">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <label>Status</label>
            <!-- <button type="button" class="btn btn-outline-success rounded-circle"><i class="fas fa-power-off"></i></button> -->
            <select class="custom-select" name="isOn" id="isOn">
                <option value="1">ON</option>
                <option value="0">OFF</option>
            </select>
        </div>
    </form>
</div>
<div class="card-footer text-right">
    <button class="btn btn-primary" id="saveTemperatureSetting">Save</button>
    <button class="btn btn-primary" id="updateTemperatureSetting">Save Changes</button>
</div>