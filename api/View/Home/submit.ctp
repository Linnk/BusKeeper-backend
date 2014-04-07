<h2>API v0.1 BusKeeper</h2>

<p>Se deben envíar los datos en un mensaje JSON por POST. Por ejemplo:</p>

<pre>
{
  "viaje": {
    "udid": "7F97CCE2-B518-4CEB-AA47-97ACC97DD74E",
    "totalTime": 633.972878,
    "totalStops": 1,
    "ruta": "37",
    "unidad": "A-0968",
    "averageSpeed": 7.777645,
    "maxSpeed": 23.559103,
    "rateSeguridad": 1,
    "rateHigiene": 2,
    "ratePuntualidad": 3,
    "rateChofer": 4,
    "rateComodidad": 5,
    "startDate": "2013-07-23 14:42:05",
    "endDate": "2013-07-23 14:52:39",
    "waitTime": 53,
    "overspeeding": 3,
    "totalDistance": 3244.118474
  },
  "puntos": [
    {
      "course": 360,
      "latitude": 20.678192,
      "longitude": -103.387864,
      "altitude": 1595.199585,
      "speed": 6.019179,
      "horizontalAccuracy": 30,
      "verticalAccuracy": 57,
      "timestamp": "2013-07-23 14:42:05"
    },
    {...},
    {...},
    {...}
  ]
}
</pre>

<p>Donde el “viaje” contiene la información general y resumen de la ruta guardada, mientras que “puntos” contiene el detalle de cada posición registrada con el GPS.</p>
<p>Los tipos de datos para cada propiedad del objecto son los siguientes:</p>

<h4>Viaje</h4>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Parámetro</th>
			<th>Tipo de datos</th>
			<th>Descripción</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>udid</td>
			<td>(string)</td>
			<td>ID único del dispositivo</td>
		</tr>
		<tr>
			<td>totalTime</td>
			<td>(double)</td>
			<td>Tiempo total de viaje en segundos.</td>
		</tr>
		<tr>
			<td>totalStops</td>
			<td>(int)</td>
			<td>Número total de paradas</td>
		</tr>
		<tr>
			<td>ruta</td>
			<td>(string)</td>
			<td>Nº de ruta</td>
		</tr>
		<tr>
			<td>unidad</td>
			<td>(string)</td>
			<td>Nº de unidad</td>
		</tr>
		<tr>
			<td>averageSpeed</td>
			<td>(double)</td>
			<td>Velocidad promedio (metros/segundo)</td>
		</tr>
		<tr>
			<td>maxSpeed</td>
			<td>(double)</td>
			<td>Velocidad máxima (metros/segundo)</td>
		</tr>
		<tr>
			<td>rateSeguridad</td>
			<td>(int)</td>
			<td>Valoración del usuario [1-5]</td>
		</tr>
		<tr>
			<td>rateHigiene</td>
			<td>(int)</td>
			<td>Valoración del usuario [1-5]</td>
		</tr>
		<tr>
			<td>ratePuntualidad</td>
			<td>(int)</td>
			<td>Valoración del usuario [1-5]</td>
		</tr>
		<tr>
			<td>rateChofer</td>
			<td>(int)</td>
			<td>Valoración del usuario [1-5]</td>
		</tr>
		<tr>
			<td>rateComodidad</td>
			<td>(int)</td>
			<td>Valoración del usuario [1-5]</td>
		</tr>
		<tr>
			<td>startDate</td>
			<td>(string: 'Y-m-d H:i:s')</td>
			<td>Fecha de inicio del viaje</td>
		</tr>
		<tr>
			<td>endDate</td>
			<td>(string: 'Y-m-d H:i:s')</td>
			<td>Fecha de fin del viaje</td>
		</tr>
		<tr>
			<td>waitTime</td>
			<td>(int)</td>
			<td>Tiempo de espera en segundos</td>
		</tr>
		<tr>
			<td>overspeeding</td>
			<td>(int)</td>
			<td>Número de excesos de velocidad (> 50km/h)</td>
		</tr>
		<tr>
			<td>totalDistance</td>
			<td>(double)</td>
			<td>Distancia tota en metros.</td>
		</tr>
	</tbody>
</table>

<h4>Puntos</h4>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Parámetro</th>
			<th>Tipo de datos</th>
			<th>Descripción</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>course</td>
			<td>(double)</td>
			<td>El curso es en grados (hasta 360º) y empieza del norte y en dirección de las manecillas del reloj.</td>
		</tr>
		<tr>
			<td>latitude</td>
			<td>(double)</td>
			<td>Latitud</td>
		</tr>
		<tr>
			<td>longitude</td>
			<td>(double)</td>
			<td>Longitud</td>
		</tr>
		<tr>
			<td>altitude</td>
			<td>(double)</td>
			<td>Altitud en metros</td>
		</tr>
		<tr>
			<td>speed</td>
			<td>(double)</td>
			<td>Velocidad en (metros/segundo)</td>
		</tr>
		<tr>
			<td>horizontalAccuracy</td>
			<td>(float)</td>
			<td>Margen de precisión horizontal (metros)</td>
		</tr>
		<tr>
			<td>verticalAccuracy</td>
			<td>(float)</td>
			<td>Margen de precisión vertical (metros)</td>
		</tr>
		<tr>
			<td>timestamp</td>
			<td>(string: 'Y-m-d H:i:s')</td>
			<td>Estampilla de tiempo</td>
		</tr>
	</tbody>
</table>


<p>La estructura de datos está basada en el framework de localización de iOS 6.1, por lo que si alguien desea generar los mismos datos desde otra plataforma (por ejemplo, Android) debe tener cuidado con la conversión de valores.</p>

<p>El objecto JSON tiene que enviarse en $_POST['data'] (para integrarse con CakePHP) a la siguiente URL: http://buskeeper.com/api/submit/{Clave HMAC MD5}</p>

<p>La clave HMAC (Hash-based Message Authentication Code) se genera usando como semilla principal el string en RAW del mensaje JSON, la clave secreta y el algoritmo MD5.</p>
