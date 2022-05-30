<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rishita Srivastava</title>
        <link
           
        />
        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php require_once 'navbar.php' ?>


        <section class="container-fluid">
            <div class="container u-mt-large">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-black">
                        <h3 class="u-fs-large ">
                        Chronic Kidney Disease Analysis
                        </h3>
                        <figure class="mt-4">
                           
                                <p>
                                Chronic Kidney Disease (CKD) is a major medical problem and can be cured if treated in the early stages. We have built a model using various concepts of machine learning such as supervised and unsupervised learning, logistic regression and many more to help patients identify this problem and start their medication at the early stage. We have designed a web app using Flask which will take the inputs and predict whether the user is suffering from CKD or not. Below is a flowchart depicting our project.


                                </p>
                                </figure>
                        
                    </div>
                    
                    <div class="mt-sm-5 mt-md-0 col-md-6 col-sm-12 u-mt-xs-5">
                        <img
                            src="images/kidney1.png"
                           
                            class="u-width-100per"
                        />
                    </div>
                </div>
            </div>
        </section>



          <section class="container-fluid">
            <div class="container u-mt-large">
                <div class="row">
                    <div class="mt-sm-5 mt-md-0 col-md-6 col-sm-12 u-mt-xs-5">
                        <img src="images/kidney2.png" class="u-width-80per"/>
                    </div>
                    <div class="col-md-6 col-sm-12 text-black">
                        <h3 class="u-fs-large ">
                          Methodology
                        </h3>
                                <p>
                                 Our project consists of the following modules:</p>
                                <p><span style="font-weight:bold">Creating dataset:</span>We have created our dataset which consists of the fields like- age, uric level, etc. We have used this dataset to train our model and derive the required results.</p>
                                <p><span style="font-weight:bold">Data Preprocessing:</span> In this stage we have eliminated the columns which are not important for our prediction model. We have find the null values and other details of the dataset.</p>
 
                                <p><span style="font-weight:bold">Application building:</span> In this module we have created a website which consists of home page and result page. The home page consists of a button which will take the user to another page where his details are asked. Based on these inputs our model will predict the results which will be displayed on the next page.</p>
                                <p><span style="font-weight:bold">Training the model on IBM cloud: </span>Lastly, we have deployed our Machine Learning Model on IBM Cloud. </p></div>
                    
                    
                </div>
            </div>
        </section>

<section class="container-fluid">
            <div class="container u-mt-large">
                <div class="row">
                    <div class="mt-sm-5 mt-md-0 col-md-6 col-sm-12 u-mt-xs-5">
                        <img
                            src="images/kidney3.png"
                           
                            class="u-width-80per"
                        />
                    </div>
                    <div class="col-md-6 col-sm-12 text-black">
                        <h3 class="u-fs-large ">
                         Outcome of project
                        </h3>  
                       
                           
                                <p>
                                The sensitivities of the classifier and word-count methods were 95.4% and 99.8%, respectively. The specificity of both was 99.8%. Categorization ofindividual patients as appropriately documented was96.9% accurate. Of 107 patients with manually verified moderate CKD, 32 (22%) lacked appropriate documentation.</p>
                    </div>                  
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="container u-mt-large">
                <div class="row">
    
                    <div class="col-md-6 col-sm-12 text-black">
                        <h3 >
                         Link to project 
                         <a href="https://github.com/Rishita11/Chronic-Kidney-Disease-Analysis">GitHub Link</a>
                         
                        </h3>  
                        
                    </div>                  
                </div>
            </div>
        </section>
        <?php require_once 'footer.php' ?>

        <script src="js/indexapp.js"></script>
    </body>
</html>
