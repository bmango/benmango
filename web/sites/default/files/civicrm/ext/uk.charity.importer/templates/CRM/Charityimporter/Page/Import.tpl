<div class="crm-content-block">
    <h3>UK Charity Data Import</h3>

    {if $importStats.error}
        <div class="messages error">
            <strong>Database Connection Error:</strong> {$importStats.error}
        </div>
    {else}
        <div class="crm-block crm-form-block">
            <div class="crm-section">
                <h4>Import Statistics</h4>
                <table class="form-layout">
                    <tr>
                        <td><strong>Total Records in Database:</strong></td>
                        <td>{$importStats.total}</td>
                    </tr>
                    <tr>
                        <td><strong>Already Imported:</strong></td>
                        <td>{$importStats.imported}</td>
                    </tr>
                    <tr>
                        <td><strong>Remaining to Import:</strong></td>
                        <td>{$importStats.remaining}</td>
                    </tr>
                </table>
            </div>

            <div class="crm-section">
                <h4>Import Options</h4>
                <form method="post" action="{crmURL p='civicrm/charity/import'}">
                    <table class="form-layout">
                        <tr>
                            <td class="label">
                                <label for="batch_size">Batch Size:</label>
                            </td>
                            <td>
                                <input type="number" id="batch_size" name="batch_size" value="100" min="1" max="1000" />
                                <div class="description">Number of records to process at once (recommended: 100-500)</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">
                                <label for="start_from">Start From Record:</label>
                            </td>
                            <td>
                                <input type="number" id="start_from" name="start_from" value="0" min="0" />
                                <div class="description">Skip this many records (useful for resuming interrupted imports)</div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit_import" value="Start Import" class="crm-button" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="crm-section">
                <h4>Import Notes</h4>
                <ul>
                    <li>This import will create Organization contacts with contact sub-type "Charity"</li>
                    <li>The 'reg' field will be mapped to the External Identifier</li>
                    <li>Address fields will be combined into the primary address</li>
                    <li>All custom fields matching your database columns will be populated</li>
                    <li>Existing records (matched by External Identifier) will be updated</li>
                    <li>Processing large batches may take time - monitor for timeouts</li>
                </ul>
            </div>
        </div>
    {/if}
</div>