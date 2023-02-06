
<div class="bungkus">

    <div class="main">
        <div class="toggle md:mt-2 hidden lg:flex">
            <ion-icon name="menu-outline" class="hidden lg:flex"> </ion-icon>
        </div>

        <div class="bg-white -mt-10 lg:mt-7">
            <div class="w-full  md:inset-0 z-50 justify-center items-center sm:h-full">
                <div class=" w-full mb-6 max-w-3xl md:max-w-5xl lg:max-w-6xl px-4 md:p-0 h-full md:h-auto">
                    <div class="bg-white rounded-lg relative">
                        <div class="flex items-start justify-between pb-5 border-b rounded-t">
                            <h3 class="text-xl font-semibold pt-2 pl-4">
                                Edit Data
                                {{ $model->nama_lengkap }}
                            </h3>
                        </div>

                        <div class="pb-6">
                            <form method="POST" action="{{ url('data/' . $model->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="PATCH">
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nama_lengkap"
                                            class="text-sm font-medium text-gray-900 block mb-2">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5"
                                            value="{{ $model->nama_lengkap }}">
                                        @foreach ($errors->get('nama_lengkap') as $msg)
                                        <p class="text-sky-500">{{ $msg }}</p>
                                        @endforeach
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="jenis_kelamin"
                                            class="text-sm font-medium text-gray-900 block mb-2">Jenis kelamin</label>
                                        <select name="jenis_kelamin"
                                            class="block appearance-none w-full bg-gray-200 border border-gray-200 focus:ring-temaku focus:border-temaku text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white">
                                            <option value="{{ $model->jenis_kelamin }}">{{ $model->jenis_kelamin }}
                                            </option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>


                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="alamat_domisili"
                                            class="text-sm font-medium text-gray-900 block mb-2">Alamat Domisili</label>
                                        <select name="alamat_domisili"
                                            class="block appearance-none w-full bg-gray-200 border border-gray-200 focus:ring-temaku focus:border-temaku text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            value="{{ $model->alamat_domisili }}">
                                            <option value="{{ $model->alamat_domisili }}">{{ $model->alamat_domisili }}
                                            </option>
                                            <option value="-"></option>
                                            <option value="Kota Makassar">Kota Makassar</option>
                                            <option value="Kota Palopo">Kota Palopo</option>
                                            <option value="Kota Parepare">Kota Parepare </option>
                                            <option value="Kabupaten Bantaeng">Kabupaten Bantaeng</option>
                                            <option value="Kabupaten Barru">Kabupaten Barru</option>
                                            <option value="Kabupaten Bone">Kabupaten Bone </option>
                                            <option value="Kabupaten Bulukumba">Kabupaten Bulukumba</option>
                                            <option value="Kabupaten Enrekang">Kabupaten Enrekang </option>
                                            <option value="Kabupaten Gowa">Kabupaten Gowa </option>
                                            <option value="Kabupaten Jeneponto">Kabupaten Jeneponto </option>
                                            <option value="Kabupaten Kepulauan Selayar">Kabupaten Kepulauan Selayar
                                            </option>
                                            <option value="Kabupaten Luwu">Kabupaten Luwu</option>
                                            <option value="Kabupaten Luwu Timur">Kabupaten Luwu Timur </option>
                                            <option value="Kabupaten Luwu Utara">Kabupaten Luwu Utara</option>
                                            <option value="Kabupaten Maros">Kabupaten Maros </option>
                                            <option value="Kabupaten Pangkajene dan Kepulauan">Kabupaten Pangkajene dan
                                                Kepulauan</option>
                                            <option value="Kabupaten Pinrang">Kabupaten Pinrang </option>
                                            <option value="Kabupaten Sidenreng Rappang">Kabupaten Pinrang Rappang
                                            </option>
                                            <option value="Kabupaten Sinjai">Kabupaten Sinjai</option>
                                            <option value="Kabupaten Soppeng">Kabupaten Soppeng </option>
                                            <option value="Kabupaten Takalar">Kabupaten Takalar </option>
                                            <option value="Kabupaten Tana Toraja">Kabupaten Tana Toraja</option>
                                            <option value="Kabupaten Toraja Utara">Kabupaten Toraja Utara </option>
                                            <option value="Kabupaten Wajo">Kabupaten Wajo </option>
                                        </select>
                                        @foreach ($errors->get('alamat_domisili') as $msg)
                                        @endforeach
                                    </div>



                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tanggal_pengesahan" class="text-sm font-medium text-gray-900 block mb-2">Tanggal
                                            Pengesahan</label>
                                        <input type="date" name="tanggal_pengesahan"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg  focus:ring-temaku focus:border-temaku block w-full p-2.5"
                                            placeholder="year.mounth.days" required>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="pendidikan_terakhir"
                                            class="text-sm font-medium text-gray-900 block mb-2">Pendidikan
                                            Terakhir</label>
                                        <select name="pendidikan_terakhir"
                                            class="block appearance-none w-full bg-gray-200 border border-gray-200  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                            <option value="{{ $model->pendidikan_terakhir }}">
                                                {{ $model->pendidikan_terakhir }}</option>
                                            <option value="TK / RA">TK / RA</option>
                                            <option value="SD / MI">SD / MI</option>
                                            <option value="SMP / MTS">SMP / MTS</option>
                                            <option value="SMA / SMK">SMA / SMK</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tanggal_pengesahan"
                                            class="text-sm font-medium text-gray-900 block mb-2">Jurusan</label>
                                        <input type="text" name="jurusan"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-temaku focus:border-temaku block w-full p-2.5"
                                            placeholder="Jurusan" value="{{ $model->jurusan }}">
                                        @foreach ($errors->get('jurusan') as $msg)
                                        @endforeach
                                    </div>

                                </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 rounded pb-0">
                            <button
                                class="text-white w-full mb-2 bg-temaku hover:bg-temakuhover focus:ring-4 focus:ring-temakuhover font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="submit">Submit</button>
                            <button
                                class="text-white w-full bg-temaku hover:bg-temakuhover focus:ring-4 focus:ring-temakuhover font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="">Kembali</button>
                        </div>

                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>



</div>
