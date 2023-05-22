                    <form method="POST" action="{{ route('kurikulum.pemetaan.update_pemetaan_cpldikti_cplprodi') }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered" style="text-align: center">
                            <thead class="table-dark">
                                <tr>
                                    <th class="align-middle" scope="col" rowspan="2" style="width: 5% ; text-align: center">No</th>
                                    <th class="align-middle" scope="col" rowspan="2" style="width: 10% ; text-align: center">Kode CPLSNDikti</th>
                                    <th class="align-middle" scope="col" rowspan="2" style="width: 50% ; text-align: center">CPLSNDikti</th>
                                    <th scope="col" colspan="{{ $cplprodi_list->count() }}" style="text-align: center ">Capaian Profil Lulusan Prodi</th>
                                </tr>
                                <tr>
                                    @foreach ($cplprodi_list as $cplprod)
                                    <th scope="col">
                                        <span data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="{{ $cplprod->deskripsi }}">{{ $cplprod->kode_cplprodi }}</span>
                                        @endforeach
                                    </th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cpldikti_list as $cpldik)
                                    <tr>
                                        <th scope="row" @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                                            {{ $loop->iteration }}</th>
                                        <th scope="row" @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                                            {{ $cpldik->kode_cpldikti }}</th>
                                        <th scope="row" class="text-start"
                                            @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->count() == 0) style="background-color: yellow;" @endif>
                                            {{ $cpldik->deskripsi }}</th>
                                        @foreach ($cplprodi_list as $cplprod)
                                        <td><input type="checkbox"
                                                id="checkbox_{{ $cpldik->kode_cpldikti }}-{{ $cplprod->kode_cplprodi }}" 
                                                name="checkbox_{{ $cpldik->kode_cpldikti }}-{{ $cplprod->kode_cplprodi }}"
                                                value="{{ $cpldik->kode_cpldikti }}&{{ $cplprod->kode_cplprodi }}" style="width:26px;height:26px;"
                                                @if ($pemetaan->where('kode_cpldikti', '===', $cpldik->kode_cpldikti)->where('kode_cplprodi', '===', $cplprod->kode_cplprodi)->count()) checked @endif>
                                        </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>  
                    </form>