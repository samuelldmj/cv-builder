<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dynamic CV</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    " rel="stylesheet">


    <meta name="theme-color" content="#712cf9">

</head>

<body>
    <div class="container marketing">

        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->

            <div class="row">


                <div class="col-md-9 mb-md-0 mb-5 mx-auto">
                    <form action="cv.php" method="POST" style="margin-top: 120px" enctype="multipart/form-data">


                        <div class="md-form mb-0">
                            <label for="name" class="">Name</label>

                            <input type="text" name="name" class="form-control">
                        </div>


                        <div class="md-form mb-0">
                            <label for="address" class="">Address</label>

                            <input type="text" name="address" class="form-control">
                        </div>


                        <div class="md-form mb-0">
                            <label for="subject" class="">Phone</label>

                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="md-form mb-0">
                            <label for="subject" class="">Email</label>

                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="md-form mb-0">
                            <label for="subject" class="">Date of birth</label>

                            <input type="text" name="date" class="form-control">
                        </div>
                        <div class="md-form mb-0">
                            <label for="img" class="">image</label>

                            <input type="file" name="img" class="form-control">
                        </div>


                        <div class="md-form">
                            <label for="message">Description</label>

                            <textarea type="text" name="description" rows="4"
                                class="form-control md-textarea"></textarea>
                        </div>

                        <div class="md-form">
                            <label for="message">Experience</label>

                            <textarea type="text" name="experience" rows="4"
                                class="form-control md-textarea"></textarea>
                        </div>

                        <div class="md-form">
                            <label for="message">Education</label>

                            <textarea type="text" name="education" rows="4" class="form-control md-textarea"></textarea>
                        </div>


                </div>

                <div class="text-center text-md-left">
                    <button name="submit" class="w-50 btn btn-lg btn-primary mt-4" type="submit">Create</button> </div>
            </div>
            </form>


    </div>

    </div>

    </section>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js
        "></script>
</body>

</html>
