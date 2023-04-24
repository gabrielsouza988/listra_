<template>
  <div class="mt-5">
    <div class="row">
      <div class="col-md-12">
        <h3 class="fw-bold">Simulação de Financiamento</h3>
        <p class="underline"></p>
      </div>
    </div>
  
    <div class="mt-5 mx-5">
      <div class="row ">
        <div class="col-md-12">
          <h6 class="fw-bold">Selecione um veiculo que deseja simular o financiamento</h6>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-sm-12 mb-2">
          <div class="form-group">
            <v-select placeholder="Selecione" label="modelo" :options="$store.getters.getVehicles"  v-model="vehicle"/>
          </div>
        </div>
        <div class="col-md-2 col-sm-12 mb-2">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Valor de entrada" v-model="entryValue" v-maska data-maska="9 99#.##" data-maska-tokens="9:[0-9]:repeated" data-maska-reversed style="height: 2.1em;">
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
           <button class="btn rounded-pill bg-primary px-5 text-white" @click="simulate()">Simular</button>
        </div>
      </div>
    </div>

    <div class="mt-5 mx-4" v-if="this.$store.state.vehicleSelected">
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow rounded" style="width: 19rem;">
            <div class="car">
              <img :src="this.$store.state.vehicleSelected.foto" class="card-img-top rounded-top" alt="...">
              <div class="localization badge bg-white text-dark border-radius-right">
                <svg class="me-1" width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.03338C0 2.25064 2.25064 0 5.03338 0C7.81613 0 10.0668 2.25064 10.0668 5.03338C10.0668 8.03184 6.88855 12.1664 5.58706 13.7411C5.29944 14.0863 4.77453 14.0863 4.4869 13.7411C3.17822 12.1664 0 8.03184 0 5.03338ZM3.23575 5.03339C3.23575 6.02568 4.04109 6.83102 5.03339 6.83102C6.02568 6.83102 6.83102 6.02568 6.83102 5.03339C6.83102 4.04109 6.02568 3.23575 5.03339 3.23575C4.04109 3.23575 3.23575 4.04109 3.23575 5.03339Z" fill="#7D28F7"/>
                </svg>
                <span class="text-localization">
                  {{ this.$store.state.vehicleSelected.cidade }}
                </span>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ this.$store.state.vehicleSelected.modelo }}</h5>
              <p class="mb-2">{{ this.$store.state.vehicleSelected.descricao }}</p>
              <span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4444 1.55556H12.6667V0.777778C12.6667 0.35 12.3167 0 11.8889 0C11.4611 0 11.1111 0.35 11.1111 0.777778V1.55556H4.88889V0.777778C4.88889 0.35 4.53889 0 4.11111 0C3.68333 0 3.33333 0.35 3.33333 0.777778V1.55556H2.55556C1.69222 1.55556 1.00778 2.25556 1.00778 3.11111L1 14C1 14.8556 1.69222 15.5556 2.55556 15.5556H13.4444C14.3 15.5556 15 14.8556 15 14V3.11111C15 2.25556 14.3 1.55556 13.4444 1.55556ZM13.4444 13.2222C13.4444 13.65 13.0944 14 12.6667 14H3.33333C2.90556 14 2.55556 13.65 2.55556 13.2222V5.44444H13.4444V13.2222ZM5.66667 8.55556V7H4.11111V8.55556H5.66667ZM7.22222 7H8.77778V8.55556H7.22222V7ZM11.8889 7H10.3333V8.55556H11.8889V7Z" fill="#444444" fill-opacity="0.7"/>
                </svg>
                {{ this.$store.state.vehicleSelected.ano }}
              </span>
              <span class="px-3">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346632 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9973 5.8791 15.1535 3.84586 13.6538 2.34616C12.1541 0.846462 10.1209 0.00273077 8 0ZM7.31198 1.92303H8.68803V4.10062H7.31198V1.92303ZM4.10063 8.68802H1.92303V7.31197H4.10063V8.68802ZM4.75597 5.72952L3.20792 4.18147L4.18147 3.20791L5.72952 4.75597L4.75597 5.72952ZM8 10.0176C7.69791 10.0171 7.39978 9.94881 7.12762 9.81769C6.85546 9.68657 6.61621 9.49602 6.42754 9.26008C6.23887 9.02414 6.10559 8.74885 6.03754 8.45452C5.96948 8.16018 5.96839 7.85433 6.03435 7.55952C6.1003 7.26471 6.23161 6.98847 6.4186 6.75119C6.60558 6.51392 6.84346 6.32166 7.11467 6.1886C7.38589 6.05555 7.68353 5.9851 7.98561 5.98245C8.2877 5.9798 8.58652 6.04502 8.86003 6.17329L11.8185 3.21479L12.7921 4.18835L9.8267 7.13997C9.97313 7.44747 10.0391 7.7871 10.0185 8.12706C9.99787 8.46702 9.8913 8.79618 9.70877 9.08372C9.52625 9.37126 9.27373 9.60778 8.97487 9.77112C8.67601 9.93445 8.34058 10.0193 8 10.0176ZM14.077 8.68802H11.8994V7.31197H14.077V8.68802Z" fill="#444444" fill-opacity="0.7"/>
                </svg>
                {{ this.$store.state.vehicleSelected.quilometragem }} KM
              </span>
              <span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0C3.58386 0 0 3.58386 0 8C0 12.4161 3.58386 16 8 16C12.4161 16 16 12.4161 16 8C16 3.58386 12.4161 0 8 0ZM12.0594 8.39066C12.0594 8.67941 11.8217 8.9172 11.5329 8.9172H8.39066V11.2781C8.39066 11.5669 8.15287 11.8047 7.86412 11.8047C7.57537 11.8047 7.33758 11.5669 7.33758 11.2781V8.9172H4.97665V11.2781C4.97665 11.5669 4.73885 11.8047 4.45011 11.8047C4.16136 11.8047 3.92357 11.5669 3.92357 11.2781V4.72187C3.92357 4.43312 4.16136 4.19533 4.45011 4.19533C4.73885 4.19533 4.97665 4.43312 4.97665 4.72187V7.86412H7.33758V4.72187C7.33758 4.43312 7.57537 4.19533 7.86412 4.19533C8.15287 4.19533 8.39066 4.43312 8.39066 4.72187V7.86412H11.0064V4.72187C11.0064 4.43312 11.2442 4.19533 11.5329 4.19533C11.8217 4.19533 12.0594 4.43312 12.0594 4.72187V8.39066Z" fill="#444444" fill-opacity="0.7"/>
                </svg>
                {{ this.$store.state.vehicleSelected.tipo }}
              </span>
              <h5 class="fw-bold mt-2">R$ {{ this.$store.state.vehicleSelected.valor }}</h5>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card card-body shadow rounded">
            <div class="row d-none d-md-block">
              <div class="col-md-12">
                <h6 class="fw-bold">Valores simulados para você</h6>
                <p class="underline"></p>
              </div>
            </div>

            <div class="row shadow width-price-ipva">
              <div class="col-9 ">
                <p class="fw-bold mb-0">6x</p>
                <p class="text-primary fs-29px">R$ {{ this.calculateInstallments(6) }}</p>
              </div>
              <div class="col-3 d-flex justify-content-end align-items-center ">
                <span class="bg-primary badge border-radius-left">IPVA GRÁTIS</span>
              </div>
            </div>

            <div class="row mt-2 width-price-parcels">
              <div class="col-md-5 me-2 shadow">
                <p class="fw-bold mb-0">12x</p>
                <p class="text-primary fs-29px">R$ {{ this.calculateInstallments(12) }}</p>
              </div>
              <div class="col-md-5 mt-2 shadow">
                <p class="fw-bold mb-0">48x</p>
                <p class="text-primary fs-29px">R$ {{ this.calculateInstallments(48) }}</p>
              </div>
            </div>

            <div class="row mt-3 ">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center justify-content-md-center">
                  <button class="btn btn-success rounded-pill">
                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.8098 3.24265C16.7198 1.17051 13.9698 0 11.0411 0C2.63538 0 -2.64272 9.3406 1.55465 16.7708L0 22.5641L5.80701 21.0109C8.33698 22.4127 10.4095 22.2886 11.0466 22.3714C20.7934 22.3714 25.6453 10.277 18.796 3.27932L18.8098 3.24265Z" fill="#ECEFF1"/>
                      <path d="M11.0619 20.4499L11.0564 20.449H11.0418C8.12497 20.449 6.2614 19.0321 6.07807 18.9503L2.64062 19.867L3.56185 16.4401L3.34277 16.0875C2.43529 14.6058 1.95312 12.8994 1.95312 11.1422C1.95312 2.8753 11.8026 -1.25863 17.5023 4.58453C23.1884 10.3666 19.1963 20.4499 11.0619 20.4499Z" fill="#1ABB59"/>
                      <path d="M16.0481 13.4514L16.0398 13.5219C15.7639 13.3809 14.4201 12.7068 14.1699 12.6137C13.6079 12.4003 13.7665 12.5798 12.6876 13.8472C12.5272 14.0305 12.3677 14.0446 12.0955 13.9177C11.8205 13.7767 10.9377 13.4805 9.89274 12.5215C9.07875 11.7741 8.53242 10.8574 8.37109 10.5754C8.10251 10.0997 8.66442 10.032 9.17591 9.03915C9.26758 8.84171 9.22083 8.68658 9.153 8.5465C9.08425 8.40547 8.537 7.02342 8.30784 6.47248C8.08784 5.92342 7.86143 5.99299 7.69185 5.99299C7.16386 5.94598 6.77794 5.95351 6.43786 6.31641C4.95838 7.98427 5.33146 9.70479 6.59736 11.5344C9.08517 14.8738 10.4106 15.4887 12.8343 16.3424C13.4888 16.5558 14.0855 16.5257 14.5576 16.4562C15.0838 16.3706 16.1773 15.7783 16.4056 15.1155C16.6393 14.4527 16.6393 13.9027 16.5706 13.7757C16.5027 13.6488 16.3231 13.5783 16.0481 13.4514Z" fill="#FAFAFA"/>
                    </svg>
                    Fale com consultor
                  </button>
                </div>
                <div class="col-md-8 col-sm-12 mt-2 text-center text-md-start">
                  <span class="fw-bold text-start">(31) 3441-0240</span>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
      <div class="row my-5 d-flex justify-content-center" v-else>
        <div class="col-md-8" style="height: 16vh;">
          <h2 class="fw-bold">Simule o seu financiamento!</h2>
          <p class="underline"></p>
        </div>
      </div>
    </div>
</template>

<script>
import {urlApi } from "@/main";
import { vMaska } from "maska";
import Swal from "sweetalert2";

export default {
  name: 'HomeView',
  data() {
    return {
      vehicles: [],
      // vehicle: null,
      // vehicleSelected: null,
      entryValue: null,
    }
  },
  computed: {
    vehicle: {
      get() {
        return this.$store.state.vehicle;
      },
      set(value) {
        this.$store.dispatch('setVehicle', value)
      },
    },
  },
  directives: { maska: vMaska },
  methods: {
    calculateInstallments(qtd) {
      let entryPrice = this.entryValue.replace(' ', '');
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        timer: 5000,
        timerProgressBar: true,
        showConfirmButton: false
      });
      console.log(this.entryValue, this.$store.getters.getVehicleSelected.valor)
      if (entryPrice > this.$store.getters.getVehicleSelected.valor) {
        Toast.fire('O valor de entrada tem que ser menor do que o valor do automóvel', '', 'error');
        return;
      }

      const tax = {
        6: 12.47,
        12: 15.56,
        48: 18.69
      };

      const taxPrice = (this.$store.getters.getVehicleSelected.valor / 100) * tax[qtd];
      const price = this.$store.getters.getVehicleSelected.valor + taxPrice;
      const totalPrice = (price - entryPrice) / qtd;

      return totalPrice.toFixed(2);
    },

    validate() {
      console.log(this.$store.getters.getVehicle, this.$store.getters.getVehicleSelected)
      if (!this.$store.getters.getVehicle || !this.entryValue) {
        return 'Campos Obrigatórios';
      }

      
    },

    simulate() {
      const validade = this.validate();
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        timer: 5000,
        timerProgressBar: true,
        showConfirmButton: false
      });
      if (validade) {

        return Toast.fire(validade, '', 'error');       
      }

      this.axios.get(`${urlApi}veiculos/datalhe/${this.$store.getters.getVehicle.id}`)
      .then((response) => {
        if (this.entryValue > response.data.data.valor) {
          return Toast.fire('O valor de entrada tem que ser menor do que o valor do automóvel', '', 'error');
        }

        this.$store.dispatch('setVehicleSelected', response.data.data)
        // this.vehicleSelected = response.data.data;
      }).catch(function (error) {
          console.log(error);
      });
    }
  },
  created() {
    this.axios.get(`${urlApi}veiculos`)
      .then((response) => {
        // this.vehicles = response.data.data;
        this.$store.dispatch('setVehicles', response.data.data)
      }).catch(function (error) {
          console.log(error);
      });
  },
}
</script>

<style>
.width-price-ipva {
  width: 63%;
}

.width-price-parcels {
  width: 75%;
}

@media (max-width: 576px) {
  .width-price-ipva {
    width: 100%;
  }

  .width-price-parcels {
    width: 100%;
  }
}

.border-radius-right {
  border-radius: 0 50rem 50rem 0 !important;
}

.border-radius-left {
  border-radius: 50rem 0 0 50rem !important;
}

.car .localization{
  color:#fff;
  margin: 0;
  position:relative;
  bottom:50px;
}
.car .localization small{
  display:block;
}
</style>
