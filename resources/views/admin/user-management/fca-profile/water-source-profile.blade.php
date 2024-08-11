<h2 class="bg-success text-white p-2 text-center rounded-3">Water Source Profile</h2>

<div class="col-md-6 mb-2">
    <h3 class="head-title-style">Small Scale Irrigation Projects</h3>
</div>


<div class="col-md-8">
    <h5 class="title-style">Rainwater Harvesting Facilities</h5>
    <div class="form-check d-inline-block mt-2">
        <label class="form-check-label label-style" for="SWIP-checkbox">
            Small Water Impounding Project(SWIP)
        </label>
        <p>
            An earth-filled structure with a height of 5-15 meters constructed across narrow valleys or
            depressions to create a reservoir that will harvest and store rainfall and runoff for immediate
            or future use.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="swipHectares" id="SWIP-text" autocomplete="off"
            value="{{ old('swipHectares', optional($waterProfile)->SWIPHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="SFR-checkbox">
            Small Farm Reservoir(SFR)
        </label>
        <p>
            impounding and storage facility with concrete or plastic as lining and protection of earth
            embankment. SFR is used to collect rainfall and run-off for immediate and future agricultural
            use.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="sfrHectares" id="SFR-text" autocomplete="off"
            value="{{ old('sfrHectares', optional($waterProfile)->SFRHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="CISTERN-checkbox">
            CISTERN
        </label>
        <p>
            refers to a water containment structure used for rainwater catchment and storage facility coming
            from the roof of houses, buildings, and sheds. Installation of the storage structure can be
            classified into i. overhead (surface) collecting tank and ii. underground collecting tank. The
            stored water can be used as supplemental irrigation for urban gardening and other beneficial
            uses.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="cisternHectares" id="CISTERN-text" autocomplete="off"
            value="{{ old('cisternHectares', optional($waterProfile)->CISTERNHectares) }}" readonly>
    </div>
</div>


<div class="col-md-8">
    <h5 class="title-style">Pump Irrigation System</h5>
    <div class="form-check d-inline-block mt-2">
        <label class="form-check-label label-style" for="shallow-checkbox">
            Shallow Tube Well(STW)
        </label>
        <P>
            consists of a tube or pipe vertically set into the ground at a depth of 6 to 20 meters with a
            pipe diameter of 50 mm, 75 mm, or 100 mm, designed to lift water from the shallow aquifer for
            irrigation using a pump and prime movers (e.g., electric motors, diesel or gasoline engine).
        </P>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="shallowHectares" id="shallow-text" autocomplete="off"
            value="{{ old('shallowHectares', optional($waterProfile)->STWHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="open-source-checkbox">
            Pump Irrigation System for Open Source(PISOS)
        </label>
        <p>
            consists of a pump and prime mover (e.g., electric motors, diesel or gasoline engine), suction
            and discharge pipes to lift water from surface waters to deliver water to point of use.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="openSourceHectares" id="open-source-text" autocomplete="off"
            value="{{ old('openSourceHectares', optional($waterProfile)->PISOSHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="pump-irrigation-checkbox">
            Pump Irrigation Projects(PIP)
        </label>
        <p>
            an upgraded PISOS which consists of a pump and prime mover (diesel or gasoline), suction,
            discharge pipes, and pump/powerhouse. It is used to lift water from surface waters going to
            distribution pipes or canals to deliver water to point of use.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control js-pis" type="text" name="pumpIrrigationHectares" id="pump-irrigation-text"
            autocomplete="off" value="{{ old('pumpIrrigationHectares', optional($waterProfile)->PIPHectares) }}"
            readonly>
    </div>
</div>

<div class="col-md-8">
    <h5 class="title-style">Pump Irrigation Projects for Open Source</h5>
    <div class="form-check d-inline-block mt-2">
        <label class="form-check-label label-style" for="RPIS-checkbox">
            Hydraulic Ram Pump Irrigation System(RPIS)
        </label>
        <p>
            A type of irrigation system that uses the energy of flowing water falling on a limited height to
            lift a small amount of that water to a much greater height.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control js-rpis" type="text" name="rpisHectares" id="RPIS-text" autocomplete="off"
            value="{{ old('rpisHectares', optional($waterProfile)->RPISHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="SPIS-checkbox">
            Solar Powered Irrigation System(SPIS)
        </label>
        <p>
            An irrigation system powered by solar energy, consists of one or more solar panels, a pump,
            electronic controls, or a controller device to operate the pump, storage tank, and conveyance
            structure.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="spisHectares" id="SPIS-text" autocomplete="off"
            value="{{ old('spisHectares', optional($waterProfile)->SPISHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="WPIS-checkbox">
            Wind Pump Irrigation System(WPIS)
        </label>
        <p>
            A type of pump that harnesses wind energy for lifting water through windmills.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="wpisHectares" id="WPIS-text" autocomplete="off"
            value="{{ old('wpisHectares', optional($waterProfile)->WPISHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <h5 class="title-style">Others</h5>
    <div class="form-check d-inline-block mt-2">
        <label class="form-check-label label-style" for="diversion-checkbox">
            Diversion DAM(DD)
        </label>
        <p>
            a concrete or rock fill structure with a height of 0.50 - 3.0 meters designed to divert a
            portion of stream flow to point of use.
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="diversionHectares" id="diversion-text" autocomplete="off"
            value="{{ old('diversionHectares', optional($waterProfile)->DDHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="check-dam-checkbox">
            Check DAM(CD)
        </label>
        <p>
            concrete or rockfill structure constructed across a waterway that reduces the velocity and
            raises water for pumping to a higher elevation. Check dams are located usually way below the
            target service area and diversion of water by gravity is not possible. The water is lifted by
            pumping (i.e., centrifugal pump, etc.) and consists of suction and discharge pipes. The height
            of the structure is less than 3 meters depending on the topography
        </p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="checkDamHectares" id="check-dam-text" autocomplete="off"
            value="{{ old('checkDamHectares', optional($waterProfile)->CDHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="spring-checkbox">
            Spring Development(SD)
        </label>
        <p>consists of the concrete intake structure, storage tank (i.e., plastic, concrete, steel), and
            polyethylene (PE) pipes or concrete canals for distribution by gravity.</p>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="springHectares" id="spring-text" autocomplete="off"
            value="{{ old('springHectares', optional($waterProfile)->SDHectares) }}" readonly>
    </div>
</div>

<div class="col-md-8 mt-2">
    <div class="form-check d-inline-block">
        <label class="form-check-label label-style" for="rainfall-checkbox">
            Rainfall
        </label>
    </div>
    <div class="form-group d-inline-block ml-2 col-md-2">
        <input class="form-control" type="text" name="rainfallHectares" id="rainfall-text" autocomplete="off"
            value="{{ old('rainfallHectares', optional($waterProfile)->rainfallHectares) }}" readonly>
    </div>
</div>
<div class="mt-3">
    <label for="grandTotal" class="form-label label-style">Grand Total of Hectares</label>
    <input wire:model="grandTotalCount" type="text" class="form-control" name="grandTotalHectares"
        id="grandTotal" style="width: 70px;"
        value="{{ old('grandTotalHectares', optional($waterProfile)->grandHectares) }}" readonly>
</div>
