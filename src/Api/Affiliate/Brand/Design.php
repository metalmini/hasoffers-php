<?php
namespace DevIT\Hasoffers\Api\Affiliate\Brand;

use DevIT\Hasoffers\Base;

class Design extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'BrandDesign';
    /**
     * Returns the Affiliate terms and conditions for the Brand.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function getTermsAndConditions($parameters = [])
    {
        return $this->get('getTermsAndConditions', $parameters);
    }
}
