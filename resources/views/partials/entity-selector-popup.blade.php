<div id="entity-selector-wrap">
    <div class="overlay" entity-link-selector>
        <div class="popup-body small flex-child">
            <div class="popup-header primary-background">
                <div class="popup-title">{{ trans('entities.entity_select') }}</div>
                <button type="button" class="corner-button neg button popup-close">x</button>
            </div>
            @include('partials/entity-selector', ['name' => 'entity-selector'])
            <div class="popup-footer">
                <button type="button" disabled="true" class="button entity-link-selector-confirm pos corner-button">{{ trans('common.select') }}</button>
            </div>
        </div>
    </div>
</div>