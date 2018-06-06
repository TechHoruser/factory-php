# Caso de uso de Factory
1. Tenemos que realizar un mostrado de un expediente en formulario
* El proceso que segiriamos habitualmente en un framework MVC, sería:
 1. Realizariamos el Modelo (Expediente), que nos rescataría del DataSource el expediente a visualizar y se realizaría un formateo de los datos relevantes para el uso.
 2. Posteriormente podríamos crear una vista donde visualizar esos datos
 3. Finalmente haríamos el controlador para expedientes con una acción view o similar, que simplemente rescatara con el modelo el expediente en cuestión y se lo pasara a la vista para su renderización
