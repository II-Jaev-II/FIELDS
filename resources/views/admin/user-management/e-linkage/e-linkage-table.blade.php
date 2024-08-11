<div>
    @if ($eLinkages)
        <table id="eLinkageTable" class="table table-success table-striped table-hover table-bordered border-success"
            style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">Commodity</th>
                    <th class="text-center">Sub Commodity</th>
                    <th class="text-center">Variety</th>
                    <th class="text-center">Estimated Time of Harvest (Start)</th>
                    <th class="text-center">Estimated Time of Harvest (End)</th>
                    <th class="text-center">Volume (Kg)</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($eLinkages as $eLinkage)
                    <tr>
                        <td class="text-center">{{ $eLinkage->commodity_name }}</td>
                        <td class="text-center">{{ $eLinkage->subCommodity_name }}</td>
                        <td class="text-center">{{ $eLinkage->variety }}</td>
                        <td class="text-center">{{ $eLinkage->startDate }}</td>
                        <td class="text-center">{{ $eLinkage->endDate }}</td>
                        <td class="text-center">{{ $eLinkage->volume }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
