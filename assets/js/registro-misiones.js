function preguntar(){
  Swal.fire({
        icon: 'question',
        title: '¿Confirmas el registro?',
        showConfirmButton: true,
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Registrar',
        showCloseButton: true
    }).then(function(re){
      if(re.isConfirmed){
        enviarDatos()
      }
    });

}

const enviarDatos = async () => {
    // Recorrer cada input y select
  const datos = {};
  const inputs = document.querySelectorAll('input, select');
  inputs.forEach((input) => {
    const id = input.id;
     if (input.type === 'checkbox') {
    datos[id] = input.checked;
  } else {
    datos[id] = input.value;
  }
  });
 
  // Convertir el objeto datos a un string para enviarlo al servidor
const datosString = JSON.stringify(datos);
 
  // Utilizar fetch para enviar los datos al servidor PHP
  const { apiUrl } = window.APP_CONFIG;
  try {
    const respuesta = await fetch(apiUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: datosString,
    });
    const datosRespuesta = await respuesta.json();
    if (datosRespuesta.estatus) {
      Swal.fire({
        icon: 'success',
        title: 'Registro exitoso',
        text: 'Tu solicitud se revisará, se enviará la información al correo proporcionado. Este es tu folio, guárdalo o preséntalo al llegar.',
        showConfirmButton: true,
        confirmButtonText: 'Ver mi folio',
        confirmButtonColor: '#F59E0B',
        allowOutsideClick: false,
      }).then(() => {
        window.location.href = `folio/data/${datosRespuesta.id}`;
      });
    } else {
      Swal.fire({
        icon: 'error',
        title: 'No se pudo registrar',
        text: datosRespuesta.mensaje || 'Ocurrió un error, intenta de nuevo.',
        confirmButtonColor: '#F59E0B',
      });
    }
 
  } catch (error) {
    console.error('Error:', error);
  }
};

function setearAreaCompania(){
  
  let area = document.getElementById('area_acompanantes')
  let opcion_seleccionada =this.event.target.value;
  switch (opcion_seleccionada) {
    case 'Solo con esposa':
      area.innerHTML = '';
      area.insertAdjacentHTML('beforeend',`
      <hr class="mb-3 mt-3">
      <h3 class="text-gray-600 font-extrabold pb-5 pt-3 text-right">Datos de la esposa</h3>
      
      <div class="grid grid-cols-3 mt-5 md:gap-6">
      <div class="relative col-span-3 z-0 w-full mb-5 group">
            <input
              type="text"
              id="nombre_esposa"
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=" "
              required
              value=""
            />
            <label
              for="floating_first_name"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >Nombre de su esposa</label
            >
          </div>
          </div>

          <div class="grid grid-cols-2 mt-5 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
              <input
                type="number"
                id="edad_esposa"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                value=""
                required
              />
              <label
                for="edad_misionero"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >
                Edad
              </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input
                  type="text"
                  id="alergias_esposa"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  value=""
                />
                <label
                  for="alergias_esposa"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >
                  Alergias
                </label>
              </div>
          </div>
        <div class="grid md:grid-cols-3 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
           <select
  id="talla-vestido-esposa"
  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
  required
>
  <option value="" selected disabled>Selecciona una talla</option>
  <option value="XS">XS</option>
  <option value="S">S</option>
  <option value="M">M</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
  <option value="XXL">XXL</option>
  <option value="XXXL">XXXL</option>
  <option value="XXXXL">XXXXL</option>
  <option value="XXXXXL">XXXXXL</option>
</select>
          <label
            for="talla-vestido-esposa"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Talla vestido</label
          >
          </div>
          <div class="relative z-0 w-full mb-5 group">
            <input
            type="number"
            id="numero-calzado"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=""
            value=""
            required
          />
          <label
            for="numero-calzado"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Número de calzado</label
          >
          </div>

          <div class="relative z-0 w-full mb-5 group">
            <div class="grid grid-cols-2">
              <input
            type="checkbox"
            id="calzado-talla-mx"
            class="block m-2 px-0"
          />
          <!---<input
            id="calzado-talla-usa"
            type="checkbox"
            class="block m-2 px-0"
          />--->
          </div>
          <label
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >México<span class="text-base-100"></span></label
          >
          </div>
        </div>
      `)
      break;
    case 'Con esposa e hijos':
      area.innerHTML = '';
      area.insertAdjacentHTML('beforeend',`
      <hr class="mb-3 mt-3">
      <h3 class="text-gray-600 font-extrabold pb-5 pt-3 text-right">Datos de la familia</h3>
      
      <div class="grid grid-cols-3 mt-5 md:gap-6">
      <div class="relative col-span-2 z-0 w-full mb-5 group">
            <input
              type="text"
              id="nombre_esposa"
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=" "
              required
              value=""
            />
            <label
              for="floating_first_name"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >Nombre de su esposa</label
            >
          </div>
          <div class="relative col-span-1 z-0 w-full mb-5 group">
            <select
              id="no_hijos"
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=" "
              required
            />
                <option value="0">Sin hijos</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">4</option>
                <option value="6">5</option>
                <option value="7">6</option>
                <option value="8">7</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <label
              for="floating_first_name"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >No. hijos</label
            >
          </div>
          </div>

          <div class="grid grid-cols-2 mt-5 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
              <input
                type="number"
                id="edad_esposa"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" "
                value=""
                required
              />
              <label
                for="edad_misionero"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >
                Edad
              </label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input
                  type="text"
                  id="alergias_esposa"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  value=""
                />
                <label
                  for="alergias_esposa"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >
                  Alergias
                </label>
              </div>
          </div>
        <div class="grid md:grid-cols-3 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <select
  id="talla-vestido-esposa"
  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
  required
>
  <option value="" selected disabled>Selecciona una talla</option>
  <option value="XS">XS</option>
  <option value="S">S</option>
  <option value="M">M</option>
  <option value="L">L</option>
  <option value="XL">XL</option>
  <option value="XXL">XXL</option>
  <option value="XXXL">XXXL</option>
  <option value="XXXXL">XXXXL</option>
  <option value="XXXXXL">XXXXXL</option>
</select>
          <label
            for="talla-vestido-esposa"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Talla vestido</label
          >
          </div>
          <div class="relative z-0 w-full mb-5 group">
            <input
            type="number"
            id="numero-calzado"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=""
            value=""
            required
          />
          <label
            for="numero-calzado"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Número de calzado</label
          >
          </div>

          <div class="relative z-0 w-full mb-5 group">
            <div class="grid grid-cols-2">
              <input
            type="checkbox"
            id="calzado-talla-mx"
            class="block m-2 px-0"
          />
          <!---<input
            id="calzado-talla-usa"
            type="checkbox"
            class="block m-2 px-0"
          />--->
          </div>
          <label
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >México<span class="text-base-100"></span></label
          >
          </div>
        </div>
        <div id="area_complementos">

        </div>
      `)

      setearAreaHijos();
      
      break;  

      case 'Solo con hijos':
        area.innerHTML = '';
        area.insertAdjacentHTML('beforeend',`
        <hr class="mb-3 mt-3">
        <h3 class="text-gray-600 font-extrabold pb-5 pt-3 text-right">Datos de los hijos</h3>
        
        
        <div class="relative col-span-1 z-0 w-full mb-5 group">
            <select
              id="no_hijos"
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=" "
              required
            />
                <option value="0">Sin hijos</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">4</option>
                <option value="6">5</option>
                <option value="7">6</option>
                <option value="8">7</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <label
              for="floating_first_name"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >No. hijos</label
            >
          </div>
           <div id="area_complementos">

        </div>
        `)
        setearAreaHijos();
        break;
      
      case 'Solo con acompañantes':
        area.innerHTML = '';
        area.insertAdjacentHTML('beforeend',`
        <hr class="mb-3 mt-3">
        <h3 class="text-gray-600 font-extrabold pb-5 pt-3 text-right">Datos de los acompañantes</h3>
        <div class="relative col-span-1 z-0 w-full mb-5 group">
            <select
              id="no_acompanantes"
              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
              placeholder=" "
              required
            />
                <option value="0">Sin acompañantes</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">4</option>
                <option value="6">5</option>
                <option value="7">6</option>
                <option value="8">7</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <label
              for="floating_first_name"
              class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
              >No. acompañantes</label
            >
          </div>

           <div id="area_complementos">
           </div>
        `)
        setearAreaHijos();
        break;
    case 'Solo':
    area.innerHTML = '';
      break;
    default:
    area.innerHTML = '';
      break;
  }
}

function setearAreaHijos(){
  let area = document.getElementById('area_acompanantes')
  let tipo_acompanante = document.getElementById('acompanantes').value;

  // Quitamos cualquier listener anterior (evita que se acumulen duplicados
  // cada vez que el usuario cambia de opción en "acompañantes").
  if (area._handlerCantidad) {
    area.removeEventListener('change', area._handlerCantidad);
  }

  const handlerCantidad = (event) => {
      // Solo nos importa el select de cantidad (no_hijos / no_acompanantes),
      // no cualquier <select> dentro del contenedor (ej. talla-vestido-esposa).
      if (event.target && (event.target.id === 'no_hijos' || event.target.id === 'no_acompanantes')) {

        let opcion_seleccionada_2 =event.target.value;
        console.log(tipo_acompanante);
        let area_complemento;
        area_complemento = document.getElementById('area_complementos')
       
        area_complemento.innerHTML = '';

        if(tipo_acompanante === 'Con esposa e hijos' || tipo_acompanante === 'Solo con hijos'){
         for (let i = 1; i <= opcion_seleccionada_2; i++) {
            area_complemento.insertAdjacentHTML('beforeend',`
          <hr class="mb-3 mt-3">
          <h3 class="text-gray-600 font-extrabold pb-2 pt-3 text-right">Hijo ${i}</h3>

          <div class="grid grid-cols-3 mt-5 md:gap-6">
          <div class="relative col-span-2 z-0 w-full mb-5 group">
                <input
                  type="text"
                  id="nombre_hijo_${i}"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                  placeholder=" "
                  required
                  value=""
                />
                <label
                  for="floating_first_name"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                  >Nombre completo</label
                >
            </div>
            </div>

            <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input
                type="number"
                id="edad-hijo-${i}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=""
                value=""
                required
              />
              <label
                for="edad-hijo-${i}"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >Edad</label
              >
              </div>
              <div class="relative z-0 w-full mb-5 group">
                <input
                type="number"
                id="numero-calzado-hijo-${i}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=""
                value=""
                required
              />
              <label
                for="numero-calzado-hijo-${i}"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >Número de calzado</label
              >
              </div>

              <div class="relative z-0 w-full mb-5 group">
                <div class="grid grid-cols-2">
                  <input
                type="checkbox"
                id="calzado-talla-mx-hijo-${i}"
                class="block m-2 px-0"
              />
             <!--- <input
                id="calzado-talla-us-hijo-${i}"
                type="checkbox"
                class="block m-2 px-0"
              />--->
              </div>
              <label
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                >México<span class="text-base-100"></span></label
              >
          </div>
          </div>
          `);
        }
        
        }   else{
             for (let i = 1; i <= opcion_seleccionada_2; i++) {
            area_complemento.insertAdjacentHTML('beforeend',`
          <hr class="mb-3 mt-3">
          <h3 class="text-gray-600 font-extrabold pb-2 pt-3 text-right">Acompañante ${i}</h3>

                <div class="grid grid-cols-3 mt-5 md:gap-6">
                    <div class="relative col-span-2 z-0 w-full mb-5 group">
                        <input
                        type="text"
                        id="nombre_acompanante_${i}"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "
                        required
                        value=""
                        />
                        <label
                        for="floating_first_name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        >Nombre completo</label
                        >
                    </div>
                </div>

                <div class="grid md:grid-cols-3 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                            <input
                            type="number"
                            id="edad-acompanante-${i}"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=""
                            value=""
                            required
                        />
                        <label
                            for="edad-acompanante-${i}"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                            >Edad</label
                        >
                        </div>
                </div>
          `);
        }
        }     
       
      }
  };

  area._handlerCantidad = handlerCantidad;
  area.addEventListener('change', handlerCantidad);
}


    const checkTodos = document.getElementById('checkTodos');
    const checksDias = document.querySelectorAll('.dia-checkbox');

    checkTodos.addEventListener('change', function () {

        checksDias.forEach(checkbox => {
            checkbox.checked = this.checked;
        });

    });

    checksDias.forEach(checkbox => {

        checkbox.addEventListener('change', function () {

            const todosMarcados = [...checksDias]
                .every(checkbox => checkbox.checked);

            checkTodos.checked = todosMarcados;

        });

    });


    function mostrarInfoHospedaje() {
    // Evita abrir múltiples alertas si ya hay una visible al hacer hover/tap
    if (Swal.isVisible()) return;

    Swal.fire({
        title: 'Información de hospedaje',
        html: `
            <div class="text-left text-sm space-y-3 text-gray-700">
                <p>Para poder organizar y solicitar correctamente las habitaciones de hotel durante nuestra <strong>XXXV Conferencia Misionera 2026</strong>, es muy importante que nos indique con precisión <em>el día de su llegada y el día de su salida</em>.</p>
                <p>Esta información nos permitirá reservar únicamente las noches que realmente necesitará, evitando solicitar habitaciones innecesarias.</p>
                <div class="bg-gray-50 p-3 rounded-lg border border-gray-200">
                    <p class="font-semibold text-gray-800 mb-2">Por favor, indique qué noches requerirá hospedaje:</p>
                    <ul class="list-disc list-inside space-y-1 pl-1">
                        <li>Jueves 19 de noviembre</li>
                        <li>Viernes 20 de noviembre</li>
                        <li>Sábado 21 de noviembre</li>
                        <li>Domingo 22 de noviembre</li>
                    </ul>
                </div>
                <p class="text-xs text-amber-800 bg-amber-50 p-2 rounded border border-amber-200">
                    <strong>Importante:</strong> Marque únicamente los días en los que necesitará hospedaje. La noche que marque corresponde a la noche que pasará en el hotel.
                </p>
                <p class="text-xs text-red-600 font-medium">
                    Una vez enviado y realizado el registro, la selección de noches de hospedaje no podrá ser modificada. Por favor, revise cuidadosamente sus fechas antes de enviar el formulario.
                </p>
            </div>
        `,
        icon: 'info',
        confirmButtonText: 'Entendido',
        confirmButtonColor: '#f59e0b',
        customClass: {
            popup: 'rounded-xl'
        }
    });
}