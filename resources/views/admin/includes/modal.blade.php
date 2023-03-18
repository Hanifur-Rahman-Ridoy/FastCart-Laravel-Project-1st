  
  
  <!-- Delete Modal Box Start --------------------------------------------->
  <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box">
                    <p>The permission for the use/group, preview is inherited from the object, object will create a
                        new permission for this object</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-target="#exampleModalToggle2"
                    data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box text-center">
                    <div class="wrapper">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>
                    <h4 class="text-content">It's Removed.</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal Box End --------------------------------------------->



{{-- Add Category MOdal Start ------------------------------------------------------ --}}




  <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <form action="{{ route('new-category') }}" method="post" id="addProductModel" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="categoryModalLabel">Add New Category</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="errorMsgContainer"></div>
            
            <div class="mb-4 row align-items-center">
                <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text"
                        placeholder="Category Name" name="name">
                </div>
            </div>
            <div class="mb-4 row align-items-center">
                <label class="form-label-title col-sm-3 mb-0">Description</label>
                <div class="col-sm-9">
                    <textarea id="editor" name="description"></textarea>
                </div>
            </div>
            <div class="mb-4 row align-items-center">
                <label class="form-label-title col-sm-3 mb-0">Image</label>
                <div class="col-sm-9">
                    <input class="form-control form-choose" type="file" name="image">
                </div>
                </div>
           

            <div class="mb-4 row align-items-center">
                <label class="form-label-title col-sm-3 mb-0">Status</label>
                <div class="col-sm-9">
                    <div class="col-md-8">
                        <label for=""><input type="radio" name="status" value="1" checked> Published</label>
                        <label for=""><input type="radio" name="status" value="0" > Unpublished</label>
                    </div>
            </div>
            </div>
         
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button  class="btn btn-primary newProduct" name="btnSave">Add New</button>
           
          </div>
        </div>
      </div>
  </form>
  </div>


{{-- Add Category MOdal  End------------------------------------------------------ --}}




















































































