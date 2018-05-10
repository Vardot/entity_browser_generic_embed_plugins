<?php

namespace Drupal\entity_browser_googledocs_embed\Plugin\media\Source;

use Drupal\entity_browser_generic_embed\InputMatchInterface;
use Drupal\entity_browser_generic_embed\ValidationConstraintMatchTrait;
use Drupal\media_entity_googledocs\Plugin\media\source\GoogleDocs as BaseGoogleDocs;

/**
 * Input-matching version of the GogoleDocs media source.
 */
class GoogleDocs extends BaseGoogleDocs implements InputMatchInterface {

  use ValidationConstraintMatchTrait;

}
