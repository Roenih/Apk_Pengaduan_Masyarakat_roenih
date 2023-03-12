let selectProvinsi = document.getElementById('selectProvinsi');
let selectKota = document.getElementById('selectKota');
let selectKecamatan = document.getElementById('selectKecamatan');
let selectKelurahan = document.getElementById('selectKelurahan');

window.onload = function(event) {
    fetchProvinsi();
};

const config = {
    method: "GET"
};
async function fetchProvinsi() {
    const URL = `http://127.0.0.1:8000/api/province`;
    const fetchData = await fetch(URL, config);
    const response = await fetchData.json();

    if (response !== null || response !== undefined) {
        response?.data?.map(data => {
            let opt = document.createElement('option');
            opt.value = data?.id;
            opt.innerHTML = data?.name;
            selectProvinsi.appendChild(opt);
        })
    } else {
        let opt = document.createElement('option');
        opt.value = "";
        opt.innerHTML = "Data tidak tersedia";
        selectKelurahan.appendChild(opt);
    }
}

async function fetchKota(id) {
    const URL = `http://127.0.0.1:8000/api/regency/${id}`;
    const fetchData = await fetch(URL, config);
    const response = await fetchData.json();

    if (response !== null || response !== undefined) {
        response?.data?.map(data => {
            let opt = document.createElement('option');
            opt.value = data?.id;
            opt.innerHTML = data?.name;
            selectKota.appendChild(opt);
        })
    } else {
        let opt = document.createElement('option');
        opt.value = "";
        opt.innerHTML = "Data tidak tersedia";
        selectKota.appendChild(opt);
    }
}
async function fetchKecamatan(id) {
    const URL = `http://127.0.0.1:8000/api/district/${id}`;
    const fetchData = await fetch(URL, config);
    const response = await fetchData.json();

    if (response !== null || response !== undefined) {
        response?.data?.map(data => {
            let opt = document.createElement('option');
            opt.value = data?.id;
            opt.innerHTML = data?.name;
            selectKecamatan.appendChild(opt);
        })
    } else {
        let opt = document.createElement('option');
        opt.value = "";
        opt.innerHTML = "Data tidak tersedia";
        selectKecamatan.appendChild(opt);
    }
}
async function fetchKelurahan(id) {
    const URL = `http://127.0.0.1:8000/api/village/${id}`;
    const fetchData = await fetch(URL, config);
    const response = await fetchData.json();

    if (response !== null || response !== undefined) {
        response?.data?.map(data => {
            let opt = document.createElement('option');
            opt.value = data?.id;
            opt.innerHTML = data?.name;
            selectKelurahan.appendChild(opt);
        })
    } else {
        let opt = document.createElement('option');
        opt.value = "";
        opt.innerHTML = "Data tidak tersedia";
        selectKelurahan.appendChild(opt);
    }
}

selectProvinsi.addEventListener('change', () => {
    selectKota.innerHTML = 'Pilih Kota/Kabupaten';
    selectKecamatan.innerHTML = 'Pilih Kecamatan';
    selectKelurahan.innerHTML = 'Pilih Kelurahan';
    fetchKota(selectProvinsi.value);
});
selectKota.addEventListener('change', () => {
    selectKecamatan.innerHTML = 'Pilih Kecamatan';
    selectKelurahan.innerHTML = 'Pilih Kelurahan';
    fetchKecamatan(selectKota.value);
});
selectKecamatan.addEventListener('change', () => {
    selectKelurahan.innerHTML = 'Pilih Kelurahan';
    fetchKelurahan(selectKecamatan.value);
});