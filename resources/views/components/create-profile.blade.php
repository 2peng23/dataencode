<!-- Modal -->
<div class="modal fade" id="create-profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="multi-step-form">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="formTabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1"
                                        role="tab" aria-controls="page1" aria-selected="true">Page 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab"
                                        aria-controls="page2" aria-selected="false">Page 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3" role="tab"
                                        aria-controls="page3" aria-selected="false">Page 3</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="formTabContent">
                                <div class="tab-pane fade show active" id="page1" role="tabpanel"
                                    aria-labelledby="page1-tab">
                                    <!-- Page 1 content -->
                                    <div class="form-group">
                                        <label for="input1">Input 1:</label>
                                        <input type="text" class="form-control" id="input1">
                                    </div>
                                    <button class="btn btn-primary next-btn">Next</button>
                                </div>
                                <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                                    <!-- Page 2 content -->
                                    <div class="form-group">
                                        <label for="input2">Input 2:</label>
                                        <input type="text" class="form-control" id="input2">
                                    </div>
                                    <button class="btn btn-secondary prev-btn">Previous</button>
                                    <button class="btn btn-primary next-btn">Next</button>
                                </div>
                                <div class="tab-pane fade" id="page3" role="tabpanel" aria-labelledby="page3-tab">
                                    <!-- Page 3 content -->
                                    <div class="form-group">
                                        <label for="input3">Input 3:</label>
                                        <input type="text" class="form-control" id="input3">
                                    </div>
                                    <div class="mt-3">

                                        <button class="btn btn-secondary prev-btn">Previous</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
