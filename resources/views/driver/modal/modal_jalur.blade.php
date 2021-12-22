
  <!-- Modal -->
  <div class="modal top fade" id="jalur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog   modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pilih Jalur</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('driver.armada') }}" method="POST">
                @csrf
              <div class="form-group row">
                
                   @foreach ($armadas as $armada)
                        <div class="col-lg-6 hilang">
                          <div class="form-check">
                            <input type="checkbox" name="armada_id[]" value="{{ $armada->id }}" id="{{ $armada->id }}">
                            <label for="{{ $armada->id }}">{{ $armada->name }}</label>
                          </div>
                        </div>

                    @endforeach

                <div class="row">
                    <div class="col-lg-12">
                        <div id="inputFormRow">
                            <div class="input-group mb-3">
                                <select class="form-select form-select-lg" name="rute[]" id="jalur"  autocomplete="off">
                                    @foreach ($zones as $zone)
                                    <option value="{{ $zone->zone }}">{{ $zone->zone }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="title[]" class="form-control form-control m-input" placeholder="Enter title" autocomplete="off"> --}}
                                <div class="input-group-append">                
                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                        <div id="newRow"></div>
                        <button id="addRow" type="button" class="btn btn-info">Tambah Jalur</button>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<select class="form-select form-select-lg" name="rute[]" id="rute"  autocomplete="off">'
        html += '@foreach($zones as $zone)'
        html += '<option value="{{ $zone->zone }}">{{ $zone->zone }}</option>'
        html += '@endforeach'
        html += '</select>'
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>