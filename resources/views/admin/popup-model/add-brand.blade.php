<div class="modal fade " id="brand-model">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary font-weight-bold" id="staticBackdropLabel"><i class="fas fa-car-side pr-2"></i> <span id="model-header-title">Brand</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/add-brand" method="POST" id="model-form">
              @csrf
              <div class="input-group mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Ender brand.." id="model-input-form" required>
                  <div class="input-group-append">
                      <button class="btn btn-primary" type="submit" >Add</button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>