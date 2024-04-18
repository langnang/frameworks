<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Swagger UI</title>
  <link rel="stylesheet" type="text/css" href="./swagger-ui.css" />
  <link rel="stylesheet" type="text/css" href="./index.css" />
  <link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16" />
</head>

<body>
  <div id="swagger-ui"></div>
  <script src="./swagger-ui-bundle.js" charset="UTF-8"> </script>
  <script src="./swagger-ui-standalone-preset.js" charset="UTF-8"> </script>
  <script>
    window.onload = function() {
      //<editor-fold desc="Changeable Configuration Block">

      // the following lines will be replaced by docker/configurator, when it runs in a docker-container
      window.ui = SwaggerUIBundle({
        // url: "https://petstore.swagger.io/v2/swagger.json",
        urls: <? echo file_get_contents("{$_SERVER['REQUEST_SCHEME']}://{$_SERVER['HTTP_HOST']}/?/api/swagger") ?>,
        dom_id: '#swagger-ui',
        deepLinking: true,
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIStandalonePreset
        ],
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
        layout: "StandaloneLayout"
      });

      //</editor-fold>
    };
  </script>
</body>

</html>