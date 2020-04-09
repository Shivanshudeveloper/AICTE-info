<?php include './includes/header.inc.php' ?>

<div class="container mt-4">
    <form action="#!" method="POST">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">SELECT STREAM</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Diploma in Engineering</option>
                        <option>Post Diploma in Engineering</option>
                        <option>B-Tech</option>
                        <option>PG Diploma in Engineering</option>
                        <option>M-Tech</option>
                        <option>PG in Pharamacy</option>
                        <option>Diploma in Arch</option>
                        <option>PG in Arch</option>
                        <option>PG in Planning</option>
                        <option>Diploma in Applied Arts and Craft</option>
                        <option>Under Graduate Degree in Applied</option>
                        <option>PG Degree in apllied arts and Craft</option>
                        <option>BSc</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">SELECT BRANCH</label>
                    <?php include './search_branch.php' ?>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">SELECT YEAR</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                        <option>4th Year</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">SELECT SUBJECT</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Computer Network</option>
                        <option>Data Structure</option>
                        <option>Algorithms</option>
                        <option>Neural Science</option>
                        <option>Company Law</option>
                        <option>Neural Science</option>
                        <option>Neural Science</option>
                    </select>
                </div>
            </div>
        </div>

        <center>
            <button name="search_btn" class="btn btn-success w-25">
                Search
            </button>
        </center>
    </form>

<?php 
    if (isset($_POST['search_btn'])) {
?> 
<section class="mt-4 mb-4">
    <div class="card rounded shadow-sm">
        <div class="card-body">
            <h1 class="card-title">Diploma in Engineering</h1>
            <h6 class="card-subtitle mb-2 text-muted">E-Contents</h6>
            <hr>
            <p class="card-text">
                <h4 class="text-center">
                    Contents from Swayam Website
                </h4>
                <div>
                    <div class="row row-cols-1 row-cols-md-5">
                        <div class="col mb-4">
                        <div class="card border-0">
                            <div class="card-body">
                            <span class="h4">
                                <a href="https://www.youtube.com/watch?v=bum_19loj9A">
                                        <i class="fas fa-file-video"></i>
                                </a>
                            </span>
                            <h6>Data Structures</h3>
                            </div>
                        </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.youtube.com/watch?v=bum_19loj9A">
                                        <i class="fas fa-file-video"></i>
                                    </a>
                                </span>
                                <h6>Algorithms</h3>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.youtube.com/watch?v=Qkwj65l_96I">
                                        <i class="fas fa-file-video"></i>
                                    </a>
                                </span>
                                <h6>Compiler</h3>
                            </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.youtube.com/watch?v=vBURTt97EkA">
                                        <i class="fas fa-file-video"></i>
                                    </a>
                                </span>
                                <h6>Operating System</h6>
                            </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.youtube.com/watch?v=Qkwj65l_96I">
                                        <i class="fas fa-file-video"></i>
                                    </a>
                                </span>
                                <h6>Networking</h6>
                            </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.youtube.com/watch?v=Qkwj65l_96I">
                                        <i class="fas fa-file-video"></i>
                                    </a>
                                </span>
                                <h6>Compiler</h3>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </p>


            <hr>
            <p class="card-text">
                <h4 class="text-center">
                    Contents from National Digital Library Website
                </h4>
                <div>
                    <div class="row row-cols-1 row-cols-md-5">
                        <div class="col mb-4">
                        <div class="card border-0">
                            <div class="card-body">
                            <span class="h4">
                                <a href="/viewnotes/Data Structures">
                                        <i class="fas fa-book"></i>
                                </a>
                            </span>
                            <h6>Data Structures</h3>
                            </div>
                        </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.researchgate.net/publication/283778784_Introduction_to_Operating_System">
                                        <i class="fas fa-book"></i>
                                    </a>
                                </span>
                                <h6>Algorithms</h3>
                            </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.researchgate.net/publication/283778784_Introduction_to_Operating_System">
                                        <i class="fas fa-book"></i>
                                    </a>
                                </span>
                                <h6>Compiler</h3>
                            </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.researchgate.net/publication/283778784_Introduction_to_Operating_System">
                                        <i class="fas fa-book"></i>
                                    </a>
                                </span>
                                <h6>Operating System</h6>
                            </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.researchgate.net/publication/283778784_Introduction_to_Operating_System">
                                        <i class="fas fa-book"></i>
                                    </a>
                                </span>
                                <h6>Networking</h6>
                            </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card border-0">
                            <div class="card-body">
                                <span class="h4">
                                    <a href="https://www.researchgate.net/publication/283778784_Introduction_to_Operating_System">
                                        <i class="fas fa-book"></i>
                                    </a>
                                </span>
                                <h6>Compiler</h3>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </p>
        </div>
    </div>
</section>

<?php 
}
?>

</div>
<!-- Container End -->


<?php include './includes/footer.inc.php' ?>