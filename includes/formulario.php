<div class="mx-auto max-w-screen-xl lg:py-5">
  <img src="assets/img/logo_2.png" class="w-32 m-auto" />
</div>

<div class="mx-auto max-w-screen-xl text-center max-w-2xl px-4 mb-10">
  <h1 class="text-gray-700 text-base sm:text-lg mb-6">
    ¡Bienvenido al portal de inscripción de nuestra XXXV Conferencia Misionera!<br>
    Antes de continuar con tu registro, es importante que sepas que el hospedaje que la Iglesia Bautista del Sur de Matamoros ha dispuesto para esta conferencia está reservado exclusivamente para los pastores y misioneros invitados, junto con sus familiares.
    Te agradecemos mucho tomar en cuenta esta información al momento de realizar tu registro. Esto nos permitirá organizar de la mejor manera su estancia y brindarles la atención que merecen durante estos días.
    Nos alegra profundamente poder recibirte. Estamos preparando esta conferencia con mucho entusiasmo y oración, deseando que sean días de comunión, descanso, enseñanza y, sobre todo, de renovación y desafío para continuar llevando adelante la obra de Cristo.
    ¡Gracias por ser parte de nuestra XXXV Conferencia Misionera!
    ¡Te esperamos en Matamoros!
  </h1>
</div>

<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:pb-10 lg:px-8">
  <h2 class="text-2xl sm:text-3xl mx-auto font-extrabold leading-9 tracking-tight text-gray-900 sm:leading-10 text-center">
    Registro para la conferencia
  </h2>
</div>

<div class="mx-auto max-w-screen-xl pb-10 px-4">
  <form class="max-w-lg mx-auto" @submit.prevent="preguntar">
    <!-- Información de la Iglesia -->
    <h3 class="text-gray-600 font-extrabold pt-3 text-right">1. Datos de la iglesia local</h3>

    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        id="nombre_iglesia"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        value=""
        required
      />
      <label
        for="nombre_iglesia"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
      >
        Nombre de la iglesia
      </label>
    </div>

    <div class="relative z-0 w-full mb-10 group">
      <input
        type="text"
        id="direccion_iglesia"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        value=""
        required
      />
      <label
        for="direccion_iglesia"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
      >
        Dirección
      </label>
    </div>

    <hr class="mb-3 mt-5">
    <h3 class="text-gray-600 font-extrabold pt-3 text-right">2. Datos del misionero</h3>

    <div class="relative z-0 w-full mb-5 group">
      <div class="grid grid-cols-1">
        <div>
          <input
            type="text"
            id="nombre_completo"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            value=""
            required
          />
          <label
            for="nombre_completo"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            Nombre completo
          </label>
        </div>
      </div>

      <!-- antes: grid-cols-3 fijo (se veía muy apretado en móvil) -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 mt-5">
        <div class="relative z-0 w-full mb-5 group">
          <input
            type="number"
            id="edad_misionero"
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
          <select
            id="primera-vez"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          >
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
          <label
            for="primera-vez"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            ¿Primera vez?
          </label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
          <input
            type="text"
            id="alergias_misionero"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            value=""
          />
          <label
            for="alergias_misionero"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >
            Alergias
          </label>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
        <input
          type="text"
          id="telefono"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" "
          required
          value=""
        />
        <label
          for="telefono"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Telefono 1</label
        >
      </div>
      <div class="relative z-0 w-full mb-5 group">
        <input
          type="text"
          id="telefono_2"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" "
          required
          value=""
        />
        <label
          for="telefono_2"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Telefono 2</label
        >
      </div>
      <div class="relative z-0 w-full mb-5 group">
        <select
  id="cargo"
  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
  required
>
  <option value="" selected disabled>Selecciona un cargo</option>
  <option value="Misionero">Misionero</option>
  <option value="Pastor">Pastor</option>
  <option value="Evangelista">Evangelista</option>
</select>
        <label
          for="cargo"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Cargo</label
        >
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
        <input
          type="email"
          id="correo"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" "
          required
          value=""
        />
        <label
          for="correo"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Correo</label
        >
      </div>
      <div class="relative z-0 w-full mb-5 group">
        <select
          id="transporte"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          required
        >
          <option value="Auto propio">Auto propio</option>
          <option value="Autobus">Autobus</option>
          <option value="Avión">Avión</option>
        </select>
        <label
          for="transporte"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Medio transporte para llegar</label
        >
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
        <select required name="talla-camisa" id="talla-camisa" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
          <option value="">Selecciona una talla</option>
          <option value="XS - 34">XS / Talla 34: Extra Chica</option>
          <option value="S - 36">S / Talla 36: Chica</option>
          <option value="M - 38">M / Talla 38: Mediana</option>
          <option value="L - 40">L / Talla 40: Grande</option>
          <option value="XL - 42">XL / Talla 42: Extra Grande (EG)</option>
          <option value="XXL - 44">XXL / Talla 44: Doble Extra Grande (2XL / EEG)</option>
          <option value="3XL - 46+">3XL / Talla 46 en adelante: Tallas extras disponibles en marcas especializadas</option>
        </select>
        <label
          for="talla-camisa"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Talla camisa</label
        >
      </div>

     <div class="relative col-span-2 z-0 w-full mb-5 group">

    <label class="block text-sm font-medium mb-2 text-gray-500">
        <span>¿Qué días nos acompañará?</span>
        <button 
        type="button" 
        class="inline-flex items-center justify-center w-6 h-6 text-xs text-amber-700 bg-amber-100 hover:bg-amber-200 border border-amber-300 rounded-full transition-colors cursor-pointer focus:outline-none"
        onclick="mostrarInfoHospedaje()"
        onmouseenter="mostrarInfoHospedaje()"
        title="Más información">
        <i class="fa-solid fa-question"></i>
    </button>
    </label>

    <div class="grid grid-cols-2 gap-3 text-gray-600" id="checkboxGroup">

        <!-- Todos -->
        <label class="flex items-center space-x-2">
            <input
                type="checkbox"
                id="checkTodos"
                name="dias[]"
                value="todos"
                class="h-4 w-4 text-blue-600 border-gray-300 rounded"
            >
            <span>Todos</span>
        </label>

        <!-- Días -->
        <?php foreach (['19', '20', '21', '22'] as $dia): ?>
            <label class="flex items-center space-x-2">
                <input
                    type="checkbox"
                    name="dias[]"
                    value="<?= $dia ?>"
                    id="dia-visita-<?= $dia ?>"
                    class="dia-checkbox h-4 w-4 text-blue-600 border-gray-300 rounded"
                >
                <span><?= $dia ?></span>
            </label>
        <?php endforeach; ?>

    </div>
</div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-6">
      <div class="relative z-0 w-full mb-5 group">
        <select
          id="acompanantes"
          class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          required
          value=""
          onchange="setearAreaCompania()"
        >
          <option value="">Seleccione una opción</option>
          <option value="Solo con esposa">Solo con esposa</option>
          <option value="Con esposa e hijos">Con esposa e hijos</option>
          <option value="Solo con hijos">Solo con hijos</option>
          <option value="Solo con acompañantes">Solo con acompañantes (no familia)</option>
          <option value="Solo">Solo</option>
        </select>
        <label
          for="acompanantes"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Acompañantes</label
        >
      </div>
    </div>

    <div id="area_acompanantes"></div>

    <div
      onclick="preguntar()"
      class="text-gray-600 cursor-pointer bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
    >
      Registrar
    </div>
  </form>
</div>