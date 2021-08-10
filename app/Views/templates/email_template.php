<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      * {
        font-family: 'Courier New', monospace;
      }

      body {
        display: flex;
      }

      section {
        background: #856CBD;
        padding: 3rem;
        color: white;
        text-align: center 
      }

      h2 {
        text-transform: uppercase;
      }

      p {
        margin-bottom: 4rem;
      }

      a {
        margin-top: 5rem;
        background: #4ECFA8;
        text-decoration: none;
        border-radius: 0.3rem;
        padding: 0.5rem;
        font-weight: bold;
        cursor: pointer;
      }

      a:hover {
        background: #B9EDDD;
        color: blue;
      }

      a:focus {
        background: #B9EDDD;
        color: blue;
      }

      div {
        display: flex;
        justify-content: space-around;
        background: #E4DFF0;
        padding: 2rem;
      }

      img {
        object-fit: contain; 
        width: 100%
      }

    </style>
    <title>Document</title>
  </head>
  <body>
    <section>
      <h2>Welcome to FiliNumisworks</h2>
      <p>Congratulations! You're almost set. We need to confirm that this is your active email address. if so, Please click the "Confirm Account" button to activate your account.</p>
      <a href="<?=site_url()?>verify_account/<?=$approval_token?>">CONFIRM ACCOUNT</a>
    </section>
    <div>
    </div>
  </body>
</html>