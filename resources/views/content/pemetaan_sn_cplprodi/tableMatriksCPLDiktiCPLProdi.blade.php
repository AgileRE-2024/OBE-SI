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
                                        title="{{ $cplprod->deskripsiCPL }}">{{ $cplprod->kodeCPL }}</span>
                                        @endforeach
                                    </th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cpldikti_list as $cpldik)
                                    <tr>
                                        <th scope="row" @if ($pemetaan->where('kodeCPLSN', '===', $cpldik->kodeCPLSN)->count() == 0) style="background-color: yellow;" @endif>
                                            {{ $loop->iteration }}</th>
                                        <th scope="row" @if ($pemetaan->where('kodeCPLSN', '===', $cpldik->kodeCPLSN)->count() == 0) style="background-color: yellow;" @endif>
                                            {{ $cpldik->kodeCPLSN }}</th>
                                        <th scope="row" class="text-start"
                                            @if ($pemetaan->where('kodeCPLSN', '===', $cpldik->kodeCPLSN)->count() == 0) style="background-color: yellow;" @endif>
                                            {{ $cpldik->deskripsiSN }}</th>
                                        @foreach ($cplprodi_list as $cplprod)
                                        <td><input type="checkbox"
                                                id="checkbox_{{ $cpldik->kodeCPLSN }}-{{ $cplprod->kodeCPL }}" 
                                                name="checkbox_{{ $cpldik->kodeCPLSN }}-{{ $cplprod->kodeCPL }}"
                                                value="{{ $cpldik->kodeCPLSN }}&{{ $cplprod->kodeCPL }}" style="width:26px;height:26px;"
                                                @if ($pemetaan->where('kodeCPLSN', '===', $cpldik->kodeCPLSN)->where('kodeCPL', '===', $cplprod->kodeCPL)->count()) checked @endif>
                                        </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>  
                    </form>