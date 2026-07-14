#!/bin/bash

# Configuration
OFFSET=${1:-0}
LIMIT=2000
DRUPAL_ROOT="/home/benmang1/public_html/drupal-project/web"
SITE_URI="https://benmango.co.uk"
SCRIPT_PATH="/home/benmang1/public_html/drupal-project/scripts/import_charities.php"

echo "🚀 Starting remote background import..."
echo "📍 Starting at offset: $OFFSET"
echo "------------------------------------------------"

while true; do
  # Run the Drush script on the live server with explicit root and URI bootstrap parameters
  OUTPUT=$(drush scr "$SCRIPT_PATH" $LIMIT $OFFSET --root="$DRUPAL_ROOT" --uri="$SITE_URI" 2>&1)

  # Output the current batch results to stdout (which nohup will write to a log file)
  echo "$OUTPUT"

  if [[ "$OUTPUT" == *"FINISHED"* ]]; then
    echo "------------------------------------------------"
    echo "✅ Success! All records processed."
    break
  fi

  OFFSET=$((OFFSET + LIMIT))
  echo "➡️ Moving to next batch (New Offset: $OFFSET)..."
  echo "------------------------------------------------"

  # 1-second pause to let MySQL breathe
  sleep 1
done
