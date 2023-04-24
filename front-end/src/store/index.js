import { createStore } from 'vuex';

export default createStore({
  state: {
    vehicleSelected: null,
    vehicle: null,
    vehicles: []
  },
  mutations: {
    SET_VEHICLE_SELECTED(state, vehicle) {
      state.vehicleSelected = vehicle
    },
    SET_VEHICLES(state, vehicles) {
      state.vehicles = vehicles
    },
    SET_VEHICLE(state, vehicle) {
      state.vehicle = vehicle
    }
  },
  actions: {
    setVehicleSelected({ commit }, vehicle) {
      commit('SET_VEHICLE_SELECTED', vehicle)
    },
    setVehicles({ commit }, vehicles) {
      commit('SET_VEHICLES', vehicles)
    },
    setVehicle({ commit }, vehicle) {
      commit('SET_VEHICLE', vehicle)
    }
  },
  getters: {
    getVehicleSelected: state => state.vehicleSelected,
    getVehicle: state => state.vehicle,
    getVehicles: state => state.vehicles
  }
})